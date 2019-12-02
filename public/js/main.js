
$(document).ready(function()
{
    new WOW().init();
})
btn = document.getElementsByTagName('button');
form = document.getElementsByTagName('form');

input = document.getElementsByTagName('input');
input[0].onchange = function()
{
    input[0].value = input[0].value.toLowerCase();
    if(input[0].value.search('http') !==-1 || input[0].value.search('https') !==-1)
    {
        input[0].value = 'http links not allowed';
    }
}
input[3].onchange = function()
{
    input[3].value = input[3].value.toLowerCase();
    if(input[3].value.search('http') !==-1 || input[3].value.search('https') !==-1)
    {
        input[3].value = 'http links not allowed';
    }
}
input[4].onchange = function()
{
    input[4].value = input[4].value.toLowerCase();
    if(input[4].value.search('http') !==-1 || input[4].value.search('https') !==-1)
    {
        input[4].value = 'http links not allowed';
    }
}
$('#summernote').summernote({
    placeholder: 'Hello stand alone ui',
    tabsize: 2,
    height: 100
});
