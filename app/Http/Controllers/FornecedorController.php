<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        /*       $fornecedores = [
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
        ];
----------------------------------------------------------------------------------
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/000-00'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S'
            ]
        ];
------------------------------------------------------------------------------------
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S'
            ]
        ];
-------------------------------------------------------------------------------------
 $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S'
            ]
        ];
------------------------------------------------------------------------------------
        /*
        condicao ? se verdade : se falso;
        condicao ? se verdade : (condicao ? se verdade : se falso);

        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;
----------------------------------------------------------------------------------------------------------

        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
--------------------------------------------------------------------------------------------------------------

        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de fora (MG)
                'telefone' => '0000-0000'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
-------------------------------------------------------------------------------------------------------
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de fora (MG)
                'telefone' => '0000-0000'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
-------------------------------------------------------------------------------------------------------

        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de fora (MG)
                'telefone' => '0000-0000'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
-------------------------------------------------------------------------------------------------

        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de fora (MG)
                'telefone' => '0000-0000'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
----------------------------------------------------------------------------------------
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de fora (MG)
                'telefone' => '0000-0000'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
----------------------------------------------------------------------------------------
*/
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de fora (MG)
                'telefone' => '0000-0000'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
