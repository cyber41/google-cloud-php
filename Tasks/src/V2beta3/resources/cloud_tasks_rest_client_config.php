<?php

return [
    'interfaces' => [
        'google.cloud.tasks.v2beta3.CloudTasks' => [
            'ListQueues' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{parent=projects/*/locations/*}/queues',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetQueue' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CreateQueue' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{parent=projects/*/locations/*}/queues',
                'body' => 'queue',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateQueue' => [
                'method' => 'patch',
                'uriTemplate' => '/v2beta3/{queue.name=projects/*/locations/*/queues/*}',
                'body' => 'queue',
                'placeholders' => [
                    'queue.name' => [
                        'getters' => [
                            'getQueue',
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteQueue' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'PurgeQueue' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}:purge',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'PauseQueue' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}:pause',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ResumeQueue' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}:resume',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetIamPolicy' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{resource=projects/*/locations/*/queues/*}:getIamPolicy',
                'body' => '*',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'SetIamPolicy' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{resource=projects/*/locations/*/queues/*}:setIamPolicy',
                'body' => '*',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'TestIamPermissions' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{resource=projects/*/locations/*/queues/*}:testIamPermissions',
                'body' => '*',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'ListTasks' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{parent=projects/*/locations/*/queues/*}/tasks',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetTask' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*/tasks/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CreateTask' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{parent=projects/*/locations/*/queues/*}/tasks',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteTask' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*/tasks/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'RunTask' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*/tasks/*}:run',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];