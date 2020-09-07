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


<!-- START_22ad378a9efd89c3e5158988ded1341a -->
## Admin/Jogador
> Example request:

```bash
curl -X GET \
    -G "http://localhost/Admin/Jogador" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Jogador"
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
`GET Admin/Jogador`


<!-- END_22ad378a9efd89c3e5158988ded1341a -->

<!-- START_76e594dbc32eacf4dc12cf2e37f713d5 -->
## Admin/Jogador/new
> Example request:

```bash
curl -X GET \
    -G "http://localhost/Admin/Jogador/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Jogador/new"
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
`GET Admin/Jogador/new`


<!-- END_76e594dbc32eacf4dc12cf2e37f713d5 -->

<!-- START_2244c3c3727681455b46c3962d9aec3f -->
## Admin/Jogador/new
> Example request:

```bash
curl -X POST \
    "http://localhost/Admin/Jogador/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Jogador/new"
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
`POST Admin/Jogador/new`


<!-- END_2244c3c3727681455b46c3962d9aec3f -->

<!-- START_a96431db4874c3e8018b4a39e6d3d1fc -->
## Admin/Time/new
> Example request:

```bash
curl -X GET \
    -G "http://localhost/Admin/Time/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Time/new"
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
{
    "time": [
        {
            "id": 1,
            "Nomedotime": "bragantino",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        },
        {
            "id": 2,
            "Nomedotime": " Clube Esportivo Nova Esperança",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        }
    ]
}
```

### HTTP Request
`GET Admin/Time/new`


<!-- END_a96431db4874c3e8018b4a39e6d3d1fc -->

<!-- START_f2239b6ef01e9e1670ae57b282482bce -->
## Admin/Time/new
> Example request:

```bash
curl -X POST \
    "http://localhost/Admin/Time/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Time/new"
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
`POST Admin/Time/new`


<!-- END_f2239b6ef01e9e1670ae57b282482bce -->

<!-- START_43b788067b96a2c4432e452233293cb2 -->
## Admin/Partida/new
> Example request:

```bash
curl -X GET \
    -G "http://localhost/Admin/Partida/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Partida/new"
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
{
    "time": [
        {
            "id": 1,
            "Nomedotime": "bragantino",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        },
        {
            "id": 2,
            "Nomedotime": " Clube Esportivo Nova Esperança",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        }
    ]
}
```

### HTTP Request
`GET Admin/Partida/new`


<!-- END_43b788067b96a2c4432e452233293cb2 -->

<!-- START_32f5950385084c6882a7604a4ebef18a -->
## Admin/Partida/new
> Example request:

```bash
curl -X POST \
    "http://localhost/Admin/Partida/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Partida/new"
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
`POST Admin/Partida/new`


<!-- END_32f5950385084c6882a7604a4ebef18a -->

<!-- START_f4d816e0497741d485f48a1bce139af0 -->
## Admin/Placar/new
> Example request:

```bash
curl -X GET \
    -G "http://localhost/Admin/Placar/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Placar/new"
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
{
    "inforcaodapartida": [
        {
            "id": 1,
            "Horarioinicio": "2020-09-05 10:00:00",
            "Horariotermino": "2020-09-05 11:50:00",
            "timesid1": 1,
            "timesid2": 2,
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        }
    ],
    "Times": {
        "time1": [
            {
                "id": 1,
                "Nomedotime": "bragantino",
                "created_at": "2020-09-05T04:00:00.000000Z",
                "updated_at": "2020-09-05T04:00:00.000000Z"
            }
        ],
        "time2": {
            "1": {
                "id": 2,
                "Nomedotime": " Clube Esportivo Nova Esperança",
                "created_at": "2020-09-05T04:00:00.000000Z",
                "updated_at": "2020-09-05T04:00:00.000000Z"
            }
        }
    }
}
```

### HTTP Request
`GET Admin/Placar/new`


<!-- END_f4d816e0497741d485f48a1bce139af0 -->

<!-- START_9823d938c98cc97760bca3e5263e9111 -->
## Admin/Placar/new
> Example request:

```bash
curl -X POST \
    "http://localhost/Admin/Placar/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Placar/new"
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
`POST Admin/Placar/new`


<!-- END_9823d938c98cc97760bca3e5263e9111 -->

<!-- START_1e69bb2139a6eb9073356ce59c66dc06 -->
## Admin/Elenco
> Example request:

```bash
curl -X GET \
    -G "http://localhost/Admin/Elenco" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Elenco"
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
{
    "time": [
        {
            "id": 1,
            "Nomedotime": "bragantino",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        },
        {
            "id": 2,
            "Nomedotime": " Clube Esportivo Nova Esperança",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        }
    ],
    "jogador": [
        {
            "id": 1,
            "Nome": "augusto",
            "CPF": "05261811171",
            "Numerodacamiseta": "14",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        },
        {
            "id": 2,
            "Nome": "arthur",
            "CPF": "0521811171",
            "Numerodacamiseta": "10",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        },
        {
            "id": 3,
            "Nome": "marcos",
            "CPF": "05261811171",
            "Numerodacamiseta": "27",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        },
        {
            "id": 4,
            "Nome": "carlos",
            "CPF": "0521811171",
            "Numerodacamiseta": "19",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        },
        {
            "id": 5,
            "Nome": "Ramo",
            "CPF": "05261811171",
            "Numerodacamiseta": "34",
            "created_at": "2020-09-05T08:00:00.000000Z",
            "updated_at": "2020-09-05T08:00:00.000000Z"
        },
        {
            "id": 6,
            "Nome": "maia",
            "CPF": "0521811171",
            "Numerodacamiseta": "90",
            "created_at": "2020-09-05T08:00:00.000000Z",
            "updated_at": "2020-09-05T08:00:00.000000Z"
        },
        {
            "id": 7,
            "Nome": "ze",
            "CPF": "05261811171",
            "Numerodacamiseta": "7",
            "created_at": "2020-09-05T08:00:00.000000Z",
            "updated_at": "2020-09-05T08:00:00.000000Z"
        },
        {
            "id": 8,
            "Nome": "MAD",
            "CPF": "05261811171",
            "Numerodacamiseta": "12",
            "created_at": "2020-09-05T08:00:00.000000Z",
            "updated_at": "2020-09-05T08:00:00.000000Z"
        },
        {
            "id": 9,
            "Nome": "C3po",
            "CPF": "0521811171",
            "Numerodacamiseta": "31",
            "created_at": "2020-09-05T08:00:00.000000Z",
            "updated_at": "2020-09-05T08:00:00.000000Z"
        },
        {
            "id": 10,
            "Nome": "julio",
            "CPF": "05261811171",
            "Numerodacamiseta": "10",
            "created_at": "2020-09-05T04:00:00.000000Z",
            "updated_at": "2020-09-05T04:00:00.000000Z"
        }
    ]
}
```

### HTTP Request
`GET Admin/Elenco`


<!-- END_1e69bb2139a6eb9073356ce59c66dc06 -->

<!-- START_931f9567d3076d78bbb92e02a02f18db -->
## Admin/Elenco/new
> Example request:

```bash
curl -X POST \
    "http://localhost/Admin/Elenco/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/Admin/Elenco/new"
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
`POST Admin/Elenco/new`


<!-- END_931f9567d3076d78bbb92e02a02f18db -->


