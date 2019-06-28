<?php

return [
    'alipay' => [
        'app_id'         => '2016101000649271',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt90TBkh/nrb13FIdYxEpjjpjMNcdTUN87C7ycAiz6PFQtE8Ovg45STSZPCqKlrVwLvEbnDrqTW+QfNlw/lyw24A4hdVPHCg5fm/JcMgNNN88YHrZmdve9gV1QineM/jYxlc9NM52PreEizILGqociOK5Z3fAZHIjBM3LpEiN0DAOag213IuCVhDrsvFyibVRWTf+xGofg/TklDvEXMemUln9rAhIDF2oNqE95Ho9iCZz2DKPTOd53s4Wd026ZAkyPVWw3cn4gCytK95e9DsGA7th6tNaDllH/lQc23PZwJPu0qY6+gDKNDOrLVx26F6jVaWQX/tIlTFwHmOBKYFcxwIDAQAB',
        'private_key'    => 'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCPADOXGYQ8mArUOI8ozoXq/kc6mdYO9C7d5n6zBP6ShbUVjZ79L0xJTk3sJi+1wCrrEKx1Hs0R5lbbSgI6AobPRumbecttAViaWs9lBP4R2Ww2mwF1Y/8fMI/l1/fUUDmpT/Uk0/SPcVFrFyOYCWfKWXmCQXADOK1kiuqvYBWvUboX+U7USz1QgW4vDmvlxvbBsnOX1H+7RyCkaDQep+9Jg3/FgcftkhezSQ/UxABVro9pqZEb9DHTozfokI4t17Dv7fgc5KXAHpUIEKUNR9/TnhQZojJETyjGjq49wbm15Wo6kWCmwfSej2t9hObqxoibCOwPaHYx99zJVstxRwaFAgMBAAECggEAbjJijzL7o1IrLiUztOeJbXBr5W289iMXpqpDwqK7pp/gzu4mscbsC6WLCMrYgz/GEwTzUQHeV8ff8PbURm3CAyMLTGOL7sFVzQTjw14YiBq7eEz0z8iyRg+/JAjMk1ELTj0ulSW81Xkmm9bl9/hvghB3QXg54FGh1NP0TBdIPqQeBdx/GFDzBhBxV5KhePDFgGxxZKysFhUvfwTyrqw6afqZUJOXVDgtbm0QeMP5X0uFCXRRCszb9Al0SnPE9Dxh/546inSqvSw38D0X+CiFgucCu4kRxrgPDvMqtoEQWldViqPvqVgKb2v0wXjjxxjLo7DhHFWRY3KYCeDDj+ru4QKBgQDIdBEEPujtIC1WZHzur05vVvYZJkd5uMMXAcvrLnpjcjGTdxIjPPbSPIoOC9ZvEt1uxjmtuJlfMelfZX82jqEOWN4VT1XJI0Y74xkuGskVePpMRD4tzG/c3kRLQOqT4zJfMaI7HFC6e5JRku1Jbe1hbM9ORcjbnyibRFrdPQM/2QKBgQC2oIN6q0grr9JetONoudz/3uhSobIqULbFN8DrjcdhR9oUhJa50DlzkYc6aBJ+k0XQd5frtKwZuFJPROVlofQ8Km6eqr+F8t3JZSzzpL1DNlPs4p3iNoYB0Zm+YODdoh6fiqxGWJHh+/xa7eTa/XDiizQFbB38VESum24/4fY8jQKBgDAmIQhCDDUZK4q67H9wwIhh/Q8hcL2+Ma5PEipVqbRFc78WNNceB7OMMyUYltNrVqELIEOoOb7yADqX6Ky0Kd+GXSIFQnfj7zTnYd7/NBniS00Sf1UE7EHDaeghmbcYNbtD8tH8BTAmColpn3Gp5AEo38rPXGXUny5chu7pfuRRAoGAX57HeJD55rXWRfQcJZc7WVVS+wDikjlUmQpKHotLW2oNizSo3n1ht1r5HOGk3VUq9q3Hg4hDm+vgXNTL71zOzjnBVZ49TVsOOQaadK9K0Ug+xQcad3jozUb7YqzC0Ai0VAB9lw+Ewnf3d3ybmPWeB1+vSy+Cu707gNis7xHWpXkCgYBSdM4Cmq7Kv+8NqjcNulmSGNDi6tjINay7K9tOLSE/XEjusCc8MncnkI9BjdOEB5ER7mjEZxQh21FLDbNaHPFF1MHaXkUChGHdvPfcFwYgVrpnLcrDJPG/I61ej8FtNYeWxD6hs1USpIKoVLp9DGdPGBxe0dRbb4UfdxLslo7HUQ==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];