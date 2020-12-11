<?php
return [
    'alipay' => [
        'app_id'         => '2016080400163553',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAp98ye1foHmUAPF4ea4UQjU0EIjgfopPzd84JlSaUHB9ANm/vPdPtaBT+idkRFVb2tgY0f57QawuA7cvRMiMm/9sVHwpnMesDBP/vRsWn4QXTnVZlJ4IUl7TUHxCOs78OucwUQI8gpu0bTv4apbU1iySeEztt/3fwWu4/M7FuG/aphVtxP01tlZgcHzCJgTG+8RSDvfOjhlebTvlft2Z7SBNaQKAFuWg6gMVL9kpKluBfzuqHI2xWEmWKutC/qFWv0x17sKdgzRGImTZng1U+Y4kIPO/rp1NVamLCai2Zi0UNA8KOKtd049qj9zgIlzsAl8AzdCt5OgaszA37FntwEwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEApKkJ8e4Zn4sqQWNSa+KR9YCdb3bLhxIGYMvzq7spdkDOgFo3svy0FFCha5VSf1jA/cMZcf3AVshk/Ku6NkrWhL6YBwuOqer5dgJN9hqFKfxXnPzNeog1cS/Gbg6gMHqennqUl8ZjMH6wIflWi5yNIXyEWQ3E4lgFIq8jAP1cgwiE27LyansZWoaRgIGjfAiIB/TL4gZb4qws6r705IKdkAksAU1XSVVWWuxdvMBq3X72Q3lC5AN0+gbx+d8JKoFhBtBzY5SmKFuHUyjkwN/E62Gjt2r/tZaEknsB+/i8JNxanqLnyH+8Q5c5w18PbAYJl4pgLRhDVW7+EppdDVFG8wIDAQABAoIBAQCiPFssH+jnJXsQygeffLFLLtnvxSBriPr3zHvdrJ8BgID2Pe27UPktOvSQx6NtDcm5Pc2IXvhviSrXOWxTqhEK4a9w4ZZDHN2FxGeEIEUsRREeAIeEP0hIqUXdklOK8IXwp95YXIPGeEyabM006Z60a7cK92IRkaAduGnIw9muz9VRI5bk2eSCsxQbjswBdKr/nSFXzxyXyQmwgGfSnAl3BFA7VR93Iu5eqE6nhXxTb9NBYfNzSQ2P7HBY8OKx2FhhrgFX6fwJvcl8Kw/fa+UumqfTx+ykid9zSkpUvfR8pGP/xjsXZJOMXhwsfp7cvXz9/zqP4Uktg8CHMTYhEsBhAoGBANEOgTtgIcm8cmJVQ9+ErQCUs97UpQkc2yYaTMuuayuR/TV4ET8x5znrS5SjsDSL4Dzpg8DKLvPWfJ8folD1Ber3oVazyn9EQblm9/sD19pBsPOQS6+Ia/IDAi1rd//B3X5mHI5vza7UDr5w7RV8/1GWWUHbaIA0M2A0jLEKF15NAoGBAMmib8zL1Rxwxf3rJYELGTEyK7g9klbypDB/4K0Lgz/ePm1Q3nzObM4Ct/8w7fFtRrdA2cDAg6vnmp/3PLB1kb/CsK2PaOSzH4xTOFWk4TRIao2epaWaY1hbIf/47a1j7X4uPWO+OLGAZlY0EMiV1oTExWAKDi2bYqrgF5wdElo/AoGABCzy/dmcsyfVbQtg8Kz4u6M8uH2s0jLGWct6rzLLpzIiSZgdWBLKGIkPmGdwlIwarXzIieg/6dTl5lO+bTmHpbrOeSncKJCXc3mQCG56ODzJqQO/z0C9TzcqKvgTjIM1xlmJxnqLNCu+I6WjxqMZgmqrW7pjKvRf9lL2YG7gKp0CgYAC7dEh8HQQDbNSlO/eiAK9rDTmYD6X9L5d1f21hc1KSDgv7lTNC1KZS4DQvC04rJWyY8bF/gXroVmlqTnAdnS/jFx0qPilGdUDfNH8rIB4+fRSSlOtrCh1SB2eUkdhlWoFwzYxFLpOGcdiyS7VOxf6pcEYPA0orHEqekbdha6WkQKBgCPXmiaZFvrxiETHjBtEFshcYWweiJB4iSQrL4sgibZkioYnxz7xXkiO0oHZ0U/S7wZBK/A8pVlxG+IXb8m4g5lPt6lwRQkd4S8+Rmo4HbLr0BJ5oy0IRFHt+xrojHy9jsG0tKQ8zglAIdMH8XMf04B2L7SGWEruC5GabcN3OAh8',
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