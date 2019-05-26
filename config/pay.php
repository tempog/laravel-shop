<?php

return [
    'alipay' => [
        'app_id'         => '2016093000628109',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAw4DFV47L+GPox4seu8fiTGMa9witVOxMLP1E0haLDp/lh98Z2CZGGQ8LUYfYhS9hxV+CJFlbo20TxKzRMA2O8uh+7v5hvTk7RVQ35TnHgfufg0RQ75Ka7NMgZSf7K8uhHO/XCXrYbNVvxulzcmDyy2Ma12PrI+8hfSq7nCHGjVWEss93ixkFvipKznntl53oIXGK4vwyx15mmFG8IQty4E+3mO0lRl7zW4jWibfRhomhOaMUtPMBZ0EqEV1+5VRLgA8lxywKTvE4IV3WZT6jN4DYh4N8Oere6W4i/RG7iMIujbYXOa9VLloGU6kWP/FX9H5wbtWYXs+tyEUpame32wIDAQAB',
        'private_key'    => 'MIIEpgIBAAKCAQEAw4DFV47L+GPox4seu8fiTGMa9witVOxMLP1E0haLDp/lh98Z2CZGGQ8LUYfYhS9hxV+CJFlbo20TxKzRMA2O8uh+7v5hvTk7RVQ35TnHgfufg0RQ75Ka7NMgZSf7K8uhHO/XCXrYbNVvxulzcmDyy2Ma12PrI+8hfSq7nCHGjVWEss93ixkFvipKznntl53oIXGK4vwyx15mmFG8IQty4E+3mO0lRl7zW4jWibfRhomhOaMUtPMBZ0EqEV1+5VRLgA8lxywKTvE4IV3WZT6jN4DYh4N8Oere6W4i/RG7iMIujbYXOa9VLloGU6kWP/FX9H5wbtWYXs+tyEUpame32wIDAQABAoIBAQCHINBF7qtI6jWRBrWdcVEXH0EaEmNL2W/lgME6vN4so5RQz4HbhsjYtS9LkSu1EsTvWU5otWLDmLcbL5//KL/vYYeqxSTlV1OCXe2sgL1HOJZOcr/Gd3yhyGQRxwqygLLBf30QTlqdDwGNaPqkyiHHNp7s1WFHmxd4njrCdg34zTZq8W0OF4I5Msmef4XASgbKcAQvq3Aq84sz1J/gqrAOOCODpoapmX3IV9Rswp7ahawEM+REMl4fF+JXaPVCKlHW6JEyJVfptsHFcX8NvhNC0NLBmxDKySLYA9hnPfq1PU4+cwzrpnND7K+DtfoACFEk5/qANe+L1ZWWVqPQ9qLhAoGBAPeWj6s5j965uRIFAG4QYJeA5lsNxybS1AAzx4Pxxg5Y3FSXE2CxjVktJX7AXLNv+c6+rmstP29p3YzRC1HqFFXYd/F326X5n4KwPuCk3DELQDXTuat5C4IQbBlD+qj5O0hfle5k3JmH0Fwkb264PaDoPAQEIfJHccaNgb/0572zAoGBAMolMNJeSEKxuMPFl1vs1NvGW9XaHWP91VCdk1HqA8w3j3+maOUk8+vkGJqG6VJkQVIAKUZS4/1+t5kkFxpTRKOTwG/TtqYwgHMDcQQzcSU6kqQFtoTjlY6BmTk7/5uf1kVua7BwnW89mgX2RcueyscUb7qe5W2ia5sMWitlmBk5AoGBAK7TtQ0+LzYhxOpRd9VAYUR5869WEkt60dJ2vaqQ3b6hxqtApqE/nsTamUBgitT1+9qeUMFDiSieA6B8uFaWSNe5bDCo5wPTOWxqEWxFXWqQPD4GDHRlm9eyyvIoS2Zn3xGi1VcqB4+uFFYMMFdpZ7MoacCYPnQ7OL7wiy9FuyH7AoGBAJmEEwbAWWplI+dxqNhEDQd3JglLoyRsAlM9yELeUNIHo/AShfj3zlLoIBNCv/E1eDH5M19X1hOO54ni0bTJZghATlXe2AhwLyypgWvqUVQvnmv4druHRu452A6SVTVv9r8184zEiZuQkedTN4BC8Mat64gz4hMX1Vaj09q/RfppAoGBAKhvRI+T1TmZSoHur+XYPvYuUJhlQBSpTva5TiGSR5TqvZQTBZZIEpcWYrL4tbhMTZnKlwzNR3oXSu6ppyOA/BHbx1BrSx02kVrI5NKIwm6r56ETkbKwfLl81g1mbJACgP1ktKJiclXmcsfHuKzM5kIM2O84mIHNwCCNYTK8EDCI',
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
            'file' => storage_path('log/wechat_pay.log')
        ],
    ],
];