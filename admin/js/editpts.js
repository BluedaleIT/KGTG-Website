function removeHttp(url) {
  return url.replace(/^https?:\/\//, "");
}
function editmodalpts(id) {
  // console.log("test");
  // console.log(id);

  // var filename = document.getElementById("filename-" + id).innerText;
  var name = document.getElementById("name-" + id).innerText;
  var location = document.getElementById("location-" + id).innerText;
  var locationurl = document.getElementById("locationurl-" + id).innerText;
  var content = document.getElementById("content-" + id).innerText;
  var imagename = document.getElementById("filename-" + id).innerText;
  var hours = document.getElementById("hours-" + id).innerText;
  var phone = document.getElementById("phone-" + id).innerText;
  var order = document.getElementById("order-" + id).innerText;

  // console.log(filename);
  // console.log(name);
  // console.log(order);
  var formname = document.getElementById("namepts");
  var formlocation = document.getElementById("locationpts");
  var formlocationurl = document.getElementById("locationurlpts");
  var formcontent = document.getElementById("contentpts");
  var formorder = document.getElementById("orderpts");
  var formid = document.getElementById("ptsid");
  var formimage = document.getElementById("imagenamepts");
  var formhours = document.getElementById("hourspts");
  var formphone = document.getElementById("phonepts");
  formid.value = id;
  formlocation.value = location;
  formimage.value = imagename;
  formlocationurl.value = locationurl;
  formcontent.value = content;
  formorder.value = order;
  formhours.value = hours;
  formphone.value = phone;
  formname.value = name;
  $("#editmodal").modal("show");
}




var toastbody = document.getElementById("toast-body");
$("#toast11").hide();
function toastupdate(body) {
  console.log("test");

  const toastLiveExample = document.getElementById("liveToast");

  const toast = new bootstrap.Toast(toastLiveExample);

  var toastbody = document.getElementById("toast-body");
  toastbody.innerHTML = body;
  $(".toast").toast("show");
  $("#toast11").toast("show");

  toast.show();
}
