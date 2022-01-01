---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## admin
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_8055d59669520376ca589a54b1c80b57 -->
## admin/reset-password
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/reset-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/reset-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reset-password`


<!-- END_8055d59669520376ca589a54b1c80b57 -->

<!-- START_a5694a6630a8800e26394ccbfa69be1e -->
## admin/update-password
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/update-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/update-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/update-password`


<!-- END_a5694a6630a8800e26394ccbfa69be1e -->

<!-- START_a97e4aef50059eaec375ae76a0e9cb4a -->
## admin/employees/list-employees
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/employees/list-employees" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/employees/list-employees"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/employees/list-employees`


<!-- END_a97e4aef50059eaec375ae76a0e9cb4a -->

<!-- START_a91de72391a57f1460e9d5e35a7725bb -->
## admin/employees/add-employee
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/employees/add-employee" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/employees/add-employee"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/employees/add-employee`


<!-- END_a91de72391a57f1460e9d5e35a7725bb -->

<!-- START_4b55114ebbf85f1bdce716d4d8dee740 -->
## admin/employees
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/employees" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/employees"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/employees`


<!-- END_4b55114ebbf85f1bdce716d4d8dee740 -->

<!-- START_a327c49a1a88cb1b6f7db6a1aba8718b -->
## admin/employees/attendance
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/employees/attendance" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/employees/attendance"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/employees/attendance`


<!-- END_a327c49a1a88cb1b6f7db6a1aba8718b -->

<!-- START_a5eb8291e656efaa52d3826142881a93 -->
## admin/employees/attendance
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/employees/attendance" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/employees/attendance"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/employees/attendance`


<!-- END_a5eb8291e656efaa52d3826142881a93 -->

<!-- START_07417eef8991be1cc3b5d015fb914e31 -->
## admin/employees/attendance/{attendance_id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/employees/attendance/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/employees/attendance/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/employees/attendance/{attendance_id}`


<!-- END_07417eef8991be1cc3b5d015fb914e31 -->

<!-- START_b533a087793500ccaeae764dfbd30576 -->
## admin/employees/profile/{employee_id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/employees/profile/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/employees/profile/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/employees/profile/{employee_id}`


<!-- END_b533a087793500ccaeae764dfbd30576 -->

<!-- START_a09f5b90bb9bb9e636198eea8b2ecc47 -->
## admin/employees/{employee_id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/employees/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/employees/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/employees/{employee_id}`


<!-- END_a09f5b90bb9bb9e636198eea8b2ecc47 -->

<!-- START_3ebc73b0a49939b73038a70a0210d3c6 -->
## admin/leaves/list-leaves
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/leaves/list-leaves" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/leaves/list-leaves"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/leaves/list-leaves`


<!-- END_3ebc73b0a49939b73038a70a0210d3c6 -->

<!-- START_d016b24a76f55453132bb4bc62039b54 -->
## admin/leaves/{leave_id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/leaves/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/leaves/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/leaves/{leave_id}`


<!-- END_d016b24a76f55453132bb4bc62039b54 -->

<!-- START_dfa3d21f6b207939eb5b1b739ac3b246 -->
## admin/expenses/list-expenses
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/expenses/list-expenses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/expenses/list-expenses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/expenses/list-expenses`


<!-- END_dfa3d21f6b207939eb5b1b739ac3b246 -->

<!-- START_3cbcd2e2cc9b8b40f3e5f45f2b2d9e64 -->
## admin/expenses/{expense_id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/expenses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/expenses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/expenses/{expense_id}`


<!-- END_3cbcd2e2cc9b8b40f3e5f45f2b2d9e64 -->

<!-- START_49ccfd934d0431f40dfe8f19cc332644 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/holidays/list-holidays" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/holidays/list-holidays"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/holidays/list-holidays`


<!-- END_49ccfd934d0431f40dfe8f19cc332644 -->

<!-- START_f16b46e6ff692faeb38866e60d6f4d02 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/holidays/add-holiday" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/holidays/add-holiday"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/holidays/add-holiday`


<!-- END_f16b46e6ff692faeb38866e60d6f4d02 -->

<!-- START_c0fe3b4b428bc578cf13efc9c49a5f9d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/holidays" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/holidays"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/holidays`


<!-- END_c0fe3b4b428bc578cf13efc9c49a5f9d -->

<!-- START_e061378264e7522a88ef31e0d61fde18 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/holidays/edit-holiday/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/holidays/edit-holiday/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/holidays/edit-holiday/{holiday_id}`


<!-- END_e061378264e7522a88ef31e0d61fde18 -->

<!-- START_f9c24af5c014e361746aa0ba15e1b4d9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/holidays/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/holidays/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/holidays/{holiday_id}`


<!-- END_f9c24af5c014e361746aa0ba15e1b4d9 -->

<!-- START_10621e66c5fccbff43b115a7855c2fd5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/holidays/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/holidays/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/holidays/{holiday_id}`


<!-- END_10621e66c5fccbff43b115a7855c2fd5 -->

<!-- START_93d924ec8bf321c7a500b088fdd13647 -->
## employee
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee`


<!-- END_93d924ec8bf321c7a500b088fdd13647 -->

<!-- START_04b24c9eddbb6bc6bffbf78f5b105ad0 -->
## employee/profile
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/profile`


<!-- END_04b24c9eddbb6bc6bffbf78f5b105ad0 -->

<!-- START_9b2b60143180961c31eb02856f32b51a -->
## employee/profile-edit/{employee_id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/profile-edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/profile-edit/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/profile-edit/{employee_id}`


<!-- END_9b2b60143180961c31eb02856f32b51a -->

<!-- START_755a3b5e5bfb8ec0a48b58c5a23ee931 -->
## employee/profile/{employee_id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/employee/profile/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/profile/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT employee/profile/{employee_id}`


<!-- END_755a3b5e5bfb8ec0a48b58c5a23ee931 -->

<!-- START_8c6bc87c529965f219928b88e46e9278 -->
## employee/attendance/list-attendances
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/attendance/list-attendances" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/attendance/list-attendances"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/attendance/list-attendances`


<!-- END_8c6bc87c529965f219928b88e46e9278 -->

<!-- START_ee6effc43251e9d6016da1e82d1d3926 -->
## employee/attendance/list-attendances
> Example request:

```bash
curl -X POST \
    "http://localhost/employee/attendance/list-attendances" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/attendance/list-attendances"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST employee/attendance/list-attendances`


<!-- END_ee6effc43251e9d6016da1e82d1d3926 -->

<!-- START_80bd2d65f96c16c9d9699f53496361f0 -->
## employee/attendance/get-location
> Example request:

```bash
curl -X POST \
    "http://localhost/employee/attendance/get-location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/attendance/get-location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST employee/attendance/get-location`


<!-- END_80bd2d65f96c16c9d9699f53496361f0 -->

<!-- START_8d1358da5097fab4141e79b0de75327b -->
## employee/attendance/register
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/attendance/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/attendance/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/attendance/register`


<!-- END_8d1358da5097fab4141e79b0de75327b -->

<!-- START_7ba11ab08c9a49ab062398d30d471533 -->
## employee/attendance/{employee_id}
> Example request:

```bash
curl -X POST \
    "http://localhost/employee/attendance/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/attendance/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST employee/attendance/{employee_id}`


<!-- END_7ba11ab08c9a49ab062398d30d471533 -->

<!-- START_d54f34be4b78a83aef6de0f8d8e12939 -->
## employee/attendance/{attendance_id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/employee/attendance/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/attendance/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT employee/attendance/{attendance_id}`


<!-- END_d54f34be4b78a83aef6de0f8d8e12939 -->

<!-- START_e0c0371888e9fbd80c5bacc4ad506688 -->
## employee/leaves/apply
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/leaves/apply" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/leaves/apply"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/leaves/apply`


<!-- END_e0c0371888e9fbd80c5bacc4ad506688 -->

<!-- START_41e0322cd35f8c7d6f148bce1dbcc7e1 -->
## employee/leaves/list-leaves
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/leaves/list-leaves" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/leaves/list-leaves"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/leaves/list-leaves`


<!-- END_41e0322cd35f8c7d6f148bce1dbcc7e1 -->

<!-- START_c8ea1490d7bb482e674e1f02f4265c57 -->
## employee/leaves/{employee_id}
> Example request:

```bash
curl -X POST \
    "http://localhost/employee/leaves/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/leaves/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST employee/leaves/{employee_id}`


<!-- END_c8ea1490d7bb482e674e1f02f4265c57 -->

<!-- START_60d374078ee851ef7ae467bdffaaeeaa -->
## employee/leaves/edit-leave/{leave_id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/leaves/edit-leave/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/leaves/edit-leave/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/leaves/edit-leave/{leave_id}`


<!-- END_60d374078ee851ef7ae467bdffaaeeaa -->

<!-- START_6454636e31ba0e5aa599c2c4ecff287a -->
## employee/leaves/{leave_id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/employee/leaves/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/leaves/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT employee/leaves/{leave_id}`


<!-- END_6454636e31ba0e5aa599c2c4ecff287a -->

<!-- START_69ccac7fa712aff0a68415ebacfe9279 -->
## employee/leaves/{leave_id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/employee/leaves/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/leaves/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE employee/leaves/{leave_id}`


<!-- END_69ccac7fa712aff0a68415ebacfe9279 -->

<!-- START_dbe7b81b0f3dc027202ae1da66c1756f -->
## employee/expenses/list-expenses
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/expenses/list-expenses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/expenses/list-expenses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/expenses/list-expenses`


<!-- END_dbe7b81b0f3dc027202ae1da66c1756f -->

<!-- START_d4fe47bb51a73f20273db8df2dde3c23 -->
## employee/expenses/claim-expense
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/expenses/claim-expense" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/expenses/claim-expense"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/expenses/claim-expense`


<!-- END_d4fe47bb51a73f20273db8df2dde3c23 -->

<!-- START_e5fd90942d883fb49c6a9fcba3036102 -->
## employee/expenses/{employee_id}
> Example request:

```bash
curl -X POST \
    "http://localhost/employee/expenses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/expenses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST employee/expenses/{employee_id}`


<!-- END_e5fd90942d883fb49c6a9fcba3036102 -->

<!-- START_49ad0486cc9488cc6ee6c4363164ff42 -->
## employee/expenses/edit-expense/{expense_id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/expenses/edit-expense/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/expenses/edit-expense/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/expenses/edit-expense/{expense_id}`


<!-- END_49ad0486cc9488cc6ee6c4363164ff42 -->

<!-- START_652bb8a1020e0e1300897b2b934faa46 -->
## employee/expenses/{expense_id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/employee/expenses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/expenses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT employee/expenses/{expense_id}`


<!-- END_652bb8a1020e0e1300897b2b934faa46 -->

<!-- START_ec6a00c60541c77039af32e82818b216 -->
## employee/expenses/{expense_id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/employee/expenses/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/expenses/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE employee/expenses/{expense_id}`


<!-- END_ec6a00c60541c77039af32e82818b216 -->

<!-- START_8bed5063f30417782bfaa1da46084fcd -->
## employee/self/holidays
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/self/holidays" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/self/holidays"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/self/holidays`


<!-- END_8bed5063f30417782bfaa1da46084fcd -->

<!-- START_7e5b4b15de2323397f333fd8e602b01b -->
## employee/self/salary_slip
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/self/salary_slip" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/self/salary_slip"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/self/salary_slip`


<!-- END_7e5b4b15de2323397f333fd8e602b01b -->

<!-- START_51dbc2cb602f0677986217d0887f2d55 -->
## employee/self/salary_slip_print
> Example request:

```bash
curl -X GET \
    -G "http://localhost/employee/self/salary_slip_print" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/employee/self/salary_slip_print"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET employee/self/salary_slip_print`


<!-- END_51dbc2cb602f0677986217d0887f2d55 -->


