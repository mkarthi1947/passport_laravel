Laravel working with passport
---------------
http://127.0.0.1:8000/api/register
Params :
    email=karthi2@gmail.com
    name=karthi2
    password=karthi2
    c_password=karthi2

var form = new FormData();
form.append("email", "karthi2@gmail.com");
form.append("name", "karthi2");
form.append("password", "karthi2");
form.append("c_password", "karthi2");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://127.0.0.1:8000/api/register",
  "method": "POST",
  "headers": {
    "Cache-Control": "no-cache",
    "Postman-Token": "0c7125a4-a68e-5a75-2f97-bdc183bb7e66"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
--------------------------

http://127.0.0.1:8000/api/get-details

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://127.0.0.1:8000/api/get-details",
  "method": "POST",
  "headers": {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImUzYWNhNjY4NzgzNTY5YTVhMzVlODY1NDIzZmZiMWQwYjE1NDhkMmE1MDM2ZTU0NGUzMzk4MzAyYmIwNzU1ZTQ5YmFlMGU2OGI4NWU2MWM0In0.eyJhdWQiOiIxIiwianRpIjoiZTNhY2E2Njg3ODM1NjlhNWEzNWU4NjU0MjNmZmIxZDBiMTU0OGQyYTUwMzZlNTQ0ZTMzOTgzMDJiYjA3NTVlNDliYWUwZTY4Yjg1ZTYxYzQiLCJpYXQiOjE1MTMwOTc3NTIsIm5iZiI6MTUxMzA5Nzc1MiwiZXhwIjoxNTQ0NjMzNzUyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.Gsp5C9aJaTsvluRuQS9F-k7_npQadN-BpkNRLtVr4_zNzGS4-ccUagxRUfIDZuF4NPTs-4PFP4IpHPWd2JZ2IU8NhVqBeFio9PWm3QFGG1l91xGTMlZKhRBQEUXahykmd5YrFlamG2PM6QtpSPozHjNk1IMgtJs3RowA-XM21Eieglk9HpXzlce_HRKi92cQzINjuAjCgrF9p4w7fzdPFVltFCjhjmifM-lkUsi8L10vyicICSFmOfRfhNFbIPRJSGWAvoX6P1cNk0D7nrH9GOBQHsBl9F3BLFeDOh3U8r5hP7E-DXMxrxedgVBG3pKeT8tUXI8A9wuJnSmoLsjJ1t_h31mHPzHJx17BdOqFAZ4aDtzIZetiOSiMJm_AgjGqLoAos-yCitKTeXyfEcHObPMnP78Q101-QDxu_2XA75cCkNQoBrN1Jrve8c78T4X9A76t1-3_WGtxv3s67dy9ztPANSz-yCacX0F7tEasD8OzCMpM_WjJ6juR3Th1XcteBwhQ3ldEuEX0QT9nWYUoeRcGRvK6oO0mpSjYKvdOPM8P0ANogFcGo8jcnngDSVtTqTpJq_ZQp_7guNaES6lpoID_BtChUXzvUKHwf9UnMCPwqK3D7Isw-Bvs0UMU84BzF1D8FbDuRAjCfBfvpXidTua9PAzOE1mYDO47Slebk3o",
    "Accept": "application/json",
    "Cache-Control": "no-cache",
    "Postman-Token": "f4099df9-e6e5-b3fb-edcb-8a8c21d35681"
  }
}

$.ajax(settings).done(function (response) {
  console.log(response);
});

------------------
http://127.0.0.1:8000/api/login

var form = new FormData();
form.append("email", "karthi@gmail.com");
form.append("password", "karthi");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://127.0.0.1:8000/api/login",
  "method": "POST",
  "headers": {
    "Cache-Control": "no-cache",
    "Postman-Token": "e5c0b151-ae2e-6571-4373-ce158613301a"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});