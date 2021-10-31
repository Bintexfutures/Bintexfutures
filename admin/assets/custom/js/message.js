/**
     * @Auther:santhosh
     * js function used render  manegusers list to html
     * @return array
     */
$(document).ready(function(){
	 var populated_options = "";
$.get("https://bintexfutures.com/admin/New_subscribe/Userlist", function(data, status){
    $value=JSON.parse(data);
    $.each($value,function(key,value){
         populated_options += '<option value="'+value['email']+'">'+value["email"]+'</option>';
    })
    $("#userdata").append(populated_options);

    $("#userdata").selectpicker("refresh");
     $('.selectpicker').selectpicker();
  });
})