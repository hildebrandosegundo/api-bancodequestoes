<?php

use Illuminate\Database\Seeder;

class niveis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['code'=>'654', 'title'=>'Banco A.J.Renner S.A.'],
            ['code'=>'246', 'title'=>'Banco ABC Brasil S.A.'],
            ['code'=>'25', 'title'=>'Banco Alfa S.A.'],
            ['code'=>'641', 'title'=>'Banco Alvorada S.A.'],
            ['code'=>'213', 'title'=>'Banco Arbi S.A.'],
            ['code'=>'19', 'title'=>'Banco Azteca do Brasil S.A.'],
            ['code'=>'29', 'title'=>'Banco Banerj S.A.'],
            ['code'=>'0', 'title'=>'Banco Bankpar S.A.'],
            ['code'=>'740', 'title'=>'Banco Barclays S.A.'],
            ['code'=>'107', 'title'=>'Banco BBM S.A.'],
            ['code'=>'31', 'title'=>'Banco Beg S.A.'],
            ['code'=>'739', 'title'=>'Banco BGN S.A.'],
            ['code'=>'96', 'title'=>'Banco BM&F de Serviços de Liquidação e Custódia S.A'],
            ['code'=>'318', 'title'=>'Banco BMG S.A.'],
            ['code'=>'752', 'title'=>'Banco BNP Paribas Brasil S.A.'],
            ['code'=>'248', 'title'=>'Banco Boavista Interatlântico S.A.'],
            ['code'=>'218', 'title'=>'Banco Bonsucesso S.A.'],
            ['code'=>'65', 'title'=>'Banco Bracce S.A.'],
            ['code'=>'36', 'title'=>'Banco Bradesco BBI S.A.'],
            ['code'=>'204', 'title'=>'Banco Bradesco Cartões S.A.'],
            ['code'=>'394', 'title'=>'Banco Bradesco Financiamentos S.A.'],
            ['code'=>'237', 'title'=>'Banco Bradesco S.A.'],
            ['code'=>'225', 'title'=>'Banco Brascan S.A.'],
            ['code'=>'M15', 'title'=>'Banco BRJ S.A.'],
            ['code'=>'208', 'title'=>'Banco BTG Pactual S.A.'],
            ['code'=>'44', 'title'=>'Banco BVA S.A.'],
            ['code'=>'263', 'title'=>'Banco Cacique S.A.'],
            ['code'=>'473', 'title'=>'Banco Caixa Geral - Brasil S.A.'],
            ['code'=>'412', 'title'=>'Banco Capital S.A.'],
            ['code'=>'40', 'title'=>'Banco Cargill S.A.'],
            ['code'=>'745', 'title'=>'Banco Citibank S.A.'],
            ['code'=>'M08', 'title'=>'Banco Citicard S.A.'],
            ['code'=>'241', 'title'=>'Banco Clássico S.A.'],
            ['code'=>'M19', 'title'=>'Banco CNH Capital S.A.'],
            ['code'=>'215', 'title'=>'Banco Comercial e de Investimento Sudameris S.A.'],
            ['code'=>'756', 'title'=>'Banco Cooperativo do Brasil S.A. - BANCOOB'],

        ];
        DB::table('nivels')->insert($data);
    }
}
