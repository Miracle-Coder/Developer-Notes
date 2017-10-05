var info = {};
var cities = [
    {name:'Athens',utc:'+3'},
    {name:'London',utc:'+1'},
    {name:'Berlin',utc:'+2'},
    {name:'Paris',utc:'+2'},
    {name:'Taipei',utc:'+8'},
    {name:'Bangkok',utc:'+7'},
    {name:'Singapore',utc:'+8'},
    {name:'Prague',utc:'+2'},
    {name:'Toronto',utc:'-4'},
    {name:'Seoul',utc:'+9'},
    {name:'Rome',utc:'+2'},
    {name:'New York',utc:'-4'},
    {name:'Shanghai',utc:'+8'},
    {name:'Barcelona',utc:'+2'},
    {name:'Milan',utc:'+2'},
    {name:'Amsterdam',utc:'+2'},
    {name:'Vienna',utc:'+2'},
    {name:'Beijing',utc:'+8'}
];
var monthNames = [ "January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December" ];
var current = 0;




function init(){
    var date = new Date();
    $('.date').text(monthNames[date.getMonth()]+' '+date.getDate());
    $('.year').text(date.getFullYear());

    //fetch weather data
    for(var i = 0; i < cities.length; i++){
        var date = new Date();
        $.getJSON('http://api.openweathermap.org/data/2.5/weather?APPID=c458144dcb333ecebc0dca40460acf7b&q='+cities[i].name+'&callback=?&units=metric', null,
            function(data) {
                if(data.cod == '404')return;
                info[data.name] = {
                    name:data.name,
                    country:data.sys.country,
                    temp:data.main.temp,
                    weather:data.weather[0].main,
                    des:data.weather[0].description,
                    hum:data.main.humidity,
                    wind:data.wind.speed
                };

            }).success(function(data){
            if(data.name == 'Beijing')
                update();

        });
    }

}
setTimes();
init();


//set the local times in degrees so it shows in the clock
function setTimes(){
    var date = new Date();
    for(var j = 0; j < cities.length; j++){
        var hours = (date.getUTCHours() > 11)? date.getUTCHours() - 12 + parseInt(cities[j].utc,10) : date.getUTCHours() + parseInt(cities[j].utc,10);
        cities[j].hours = (hours/12)*360;
        cities[j].minoutes = (date.getUTCMinutes()/60)*360;

    }

}

//update all information for each place
function update(){
    $('.update').addClass('anim');
    var city = info[cities[current].name];

    $('.place').text(city.name+','+city.country);
    $('.temp span').html(city.temp+'<sup>o</sup>C');
    $('.main').text(city.weather);
    $('.des').text(city.des);
    $('.wind span').html(city.wind+'m/s');
    $('.humidity span').html(city.hum+'%');
    $('.hour').css('transform','rotate('+cities[current].hours+'deg)');
    $('.min').css('transform','rotate('+cities[current].minoutes+'deg)');
    current = (current + 1) % 18;
    setTimeout(update,6000);
}

//after fade animation has finished remove the class that caused it so it can be reused
$('.update').on('webkitAnimationEnd oAnimationEnd msAnimationEnd animationend', function() {
    $('.anim').removeClass('anim');
});