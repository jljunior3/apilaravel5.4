<?php

use Illuminate\Database\Seeder;

class bancos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['codigo'=>'654', 'titulo'=>'Banco A.J.Renner S.A.'],
        ['codigo'=>'246', 'titulo'=>'Banco ABC Brasil S.A.'],
        ['codigo'=>'25', 'titulo'=>'Banco Alfa S.A.'],
        ['codigo'=>'641', 'titulo'=>'Banco Alvorada S.A.'],
        ['codigo'=>'213', 'titulo'=>'Banco Arbi S.A.'],
        ['codigo'=>'19', 'titulo'=>'Banco Azteca do Brasil S.A.'],
        ['codigo'=>'29', 'titulo'=>'Banco Banerj S.A.'],
        ['codigo'=>'0', 'titulo'=>'Banco Bankpar S.A.'],
        ['codigo'=>'740', 'titulo'=>'Banco Barclays S.A.'],
        ['codigo'=>'107', 'titulo'=>'Banco BBM S.A.'],
        ['codigo'=>'31', 'titulo'=>'Banco Beg S.A.'],
        ['codigo'=>'739', 'titulo'=>'Banco BGN S.A.'],
        ['codigo'=>'96', 'titulo'=>'Banco BM&F de Serviços de Liquidação e Custódia S.A'],
        ['codigo'=>'318', 'titulo'=>'Banco BMG S.A.'],
        ['codigo'=>'752', 'titulo'=>'Banco BNP Paribas Brasil S.A.'],
        ['codigo'=>'248', 'titulo'=>'Banco Boavista Interatlântico S.A.'],
        ['codigo'=>'218', 'titulo'=>'Banco Bonsucesso S.A.'],
        ['codigo'=>'65', 'titulo'=>'Banco Bracce S.A.'],
        ['codigo'=>'36', 'titulo'=>'Banco Bradesco BBI S.A.'],
        ['codigo'=>'204', 'titulo'=>'Banco Bradesco Cartões S.A.'],
        ['codigo'=>'394', 'titulo'=>'Banco Bradesco Financiamentos S.A.'],
        ['codigo'=>'237', 'titulo'=>'Banco Bradesco S.A.'],
        ['codigo'=>'225', 'titulo'=>'Banco Brascan S.A.'],
        ['codigo'=>'M15', 'titulo'=>'Banco BRJ S.A.'],
        ['codigo'=>'208', 'titulo'=>'Banco BTG Pactual S.A.'],
        ['codigo'=>'44', 'titulo'=>'Banco BVA S.A.'],
        ['codigo'=>'263', 'titulo'=>'Banco Cacique S.A.'],
        ['codigo'=>'473', 'titulo'=>'Banco Caixa Geral - Brasil S.A.'],
        ['codigo'=>'412', 'titulo'=>'Banco Capital S.A.'],
        ['codigo'=>'40', 'titulo'=>'Banco Cargill S.A.'],
        ['codigo'=>'745', 'titulo'=>'Banco Citibank S.A.'],
        ['codigo'=>'M08', 'titulo'=>'Banco Citicard S.A.'],
        ['codigo'=>'241', 'titulo'=>'Banco Clássico S.A.'],
        ['codigo'=>'M19', 'titulo'=>'Banco CNH Capital S.A.'],
        ['codigo'=>'215', 'titulo'=>'Banco Comercial e de Investimento Sudameris S.A.'],
        ['codigo'=>'756', 'titulo'=>'Banco Cooperativo do Brasil S.A. - BANCOOB'],
        ['codigo'=>'748', 'titulo'=>'Banco Cooperativo Sicredi S.A.'],
        ['codigo'=>'75', 'titulo'=>'Banco CR2 S.A.'],
        ['codigo'=>'721', 'titulo'=>'Banco Credibel S.A.'],
        ['codigo'=>'222', 'titulo'=>'Banco Credit Agricole Brasil S.A.'],
        ['codigo'=>'505', 'titulo'=>'Banco Credit Suisse (Brasil) S.A.'],
        ['codigo'=>'229', 'titulo'=>'Banco Cruzeiro do Sul S.A.'],
        ['codigo'=>'266', 'titulo'=>'Banco Cédula S.A.'],
        ['codigo'=>'3', 'titulo'=>'Banco da Amazônia S.A.'],
        ['codigo'=>'083-3', 'titulo'=>'Banco da China Brasil S.A.'],
        ['codigo'=>'M21', 'titulo'=>'Banco Daimlerchrysler S.A.'],
        ['codigo'=>'707', 'titulo'=>'Banco Daycoval S.A.'],
        ['codigo'=>'300', 'titulo'=>'Banco de La Nacion Argentina'],
        ['codigo'=>'495', 'titulo'=>'Banco de La Provincia de Buenos Aires'],
        ['codigo'=>'494', 'titulo'=>'Banco de La Republica Oriental del Uruguay'],
        ['codigo'=>'M06', 'titulo'=>'Banco de Lage Landen Brasil S.A.'],
        ['codigo'=>'24', 'titulo'=>'Banco de Pernambuco S.A. - BANDEPE'],
        ['codigo'=>'456', 'titulo'=>'Banco de Tokyo-Mitsubishi UFJ Brasil S.A.'],
        ['codigo'=>'214', 'titulo'=>'Banco Dibens S.A.'],
        ['codigo'=>'1', 'titulo'=>'Banco do Brasil S.A.'],
        ['codigo'=>'47', 'titulo'=>'Banco do Estado de Sergipe S.A.'],
        ['codigo'=>'37', 'titulo'=>'Banco do Estado do Pará S.A.'],
        ['codigo'=>'39', 'titulo'=>'Banco do Estado do Piauí S.A. - BEP'],
        ['codigo'=>'41', 'titulo'=>'Banco do Estado do Rio Grande do Sul S.A.'],
        ['codigo'=>'4', 'titulo'=>'Banco do Nordeste do Brasil S.A.'],
        ['codigo'=>'265', 'titulo'=>'Banco Fator S.A.'],
        ['codigo'=>'M03', 'titulo'=>'Banco Fiat S.A.'],
        ['codigo'=>'224', 'titulo'=>'Banco Fibra S.A.'],
        ['codigo'=>'626', 'titulo'=>'Banco Ficsa S.A.'],
        ['codigo'=>'M18', 'titulo'=>'Banco Ford S.A.'],
        ['codigo'=>'233', 'titulo'=>'Banco GE Capital S.A.'],
        ['codigo'=>'734', 'titulo'=>'Banco Gerdau S.A.'],
        ['codigo'=>'M07', 'titulo'=>'Banco GMAC S.A.'],
        ['codigo'=>'612', 'titulo'=>'Banco Guanabara S.A.'],
        ['codigo'=>'M22', 'titulo'=>'Banco Honda S.A.'],
        ['codigo'=>'63', 'titulo'=>'Banco Ibi S.A. Banco Múltiplo'],
        ['codigo'=>'M11', 'titulo'=>'Banco IBM S.A.'],
        ['codigo'=>'604', 'titulo'=>'Banco Industrial do Brasil S.A.'],
        ['codigo'=>'320', 'titulo'=>'Banco Industrial e Comercial S.A.'],
        ['codigo'=>'653', 'titulo'=>'Banco Indusval S.A.'],
        ['codigo'=>'630', 'titulo'=>'Banco Intercap S.A.'],
        ['codigo'=>'077-9', 'titulo'=>'Banco Intermedium S.A.'],
        ['codigo'=>'249', 'titulo'=>'Banco Investcred Unibanco S.A.'],
        ['codigo'=>'M09', 'titulo'=>'Banco Itaucred Financiamentos S.A.'],
        ['codigo'=>'184', 'titulo'=>'Banco Itaú BBA S.A.'],
        ['codigo'=>'479', 'titulo'=>'Banco ItaúBank S.A'],
        ['codigo'=>'376', 'titulo'=>'Banco J. P. Morgan S.A.'],
        ['codigo'=>'74', 'titulo'=>'Banco J. Safra S.A.'],
        ['codigo'=>'217', 'titulo'=>'Banco John Deere S.A.'],
        ['codigo'=>'76', 'titulo'=>'Banco KDB S.A.'],
        ['codigo'=>'757', 'titulo'=>'Banco KEB do Brasil S.A.'],
        ['codigo'=>'600', 'titulo'=>'Banco Luso Brasileiro S.A.'],
        ['codigo'=>'212', 'titulo'=>'Banco Matone S.A.'],
        ['codigo'=>'M12', 'titulo'=>'Banco Maxinvest S.A.'],
        ['codigo'=>'389', 'titulo'=>'Banco Mercantil do Brasil S.A.'],
        ['codigo'=>'746', 'titulo'=>'Banco Modal S.A.'],
        ['codigo'=>'M10', 'titulo'=>'Banco Moneo S.A.'],
        ['codigo'=>'738', 'titulo'=>'Banco Morada S.A.'],
        ['codigo'=>'66', 'titulo'=>'Banco Morgan Stanley S.A.'],
        ['codigo'=>'243', 'titulo'=>'Banco Máxima S.A.'],
        ['codigo'=>'45', 'titulo'=>'Banco Opportunity S.A.'],
        ['codigo'=>'M17', 'titulo'=>'Banco Ourinvest S.A.'],
        ['codigo'=>'623', 'titulo'=>'Banco Panamericano S.A.'],
        ['codigo'=>'611', 'titulo'=>'Banco Paulista S.A.'],
        ['codigo'=>'613', 'titulo'=>'Banco Pecúnia S.A.'],
        ['codigo'=>'094-2', 'titulo'=>'Banco Petra S.A.'],
        ['codigo'=>'643', 'titulo'=>'Banco Pine S.A.'],
        ['codigo'=>'724', 'titulo'=>'Banco Porto Seguro S.A.'],
        ['codigo'=>'735', 'titulo'=>'Banco Pottencial S.A.'],
        ['codigo'=>'638', 'titulo'=>'Banco Prosper S.A.'],
        ['codigo'=>'M24', 'titulo'=>'Banco PSA Finance Brasil S.A.'],
        ['codigo'=>'747', 'titulo'=>'Banco Rabobank International Brasil S.A.'],
        ['codigo'=>'088-4', 'titulo'=>'Banco Randon S.A.'],
        ['codigo'=>'356', 'titulo'=>'Banco Real S.A.'],
        ['codigo'=>'633', 'titulo'=>'Banco Rendimento S.A.'],
        ['codigo'=>'741', 'titulo'=>'Banco Ribeirão Preto S.A.'],
        ['codigo'=>'M16', 'titulo'=>'Banco Rodobens S.A.'],
        ['codigo'=>'72', 'titulo'=>'Banco Rural Mais S.A.'],
        ['codigo'=>'453', 'titulo'=>'Banco Rural S.A.'],
        ['codigo'=>'422', 'titulo'=>'Banco Safra S.A.'],
        ['codigo'=>'33', 'titulo'=>'Banco Santander (Brasil) S.A.'],
        ['codigo'=>'250', 'titulo'=>'Banco Schahin S.A.'],
        ['codigo'=>'743', 'titulo'=>'Banco Semear S.A.'],
        ['codigo'=>'749', 'titulo'=>'Banco Simples S.A.'],
        ['codigo'=>'366', 'titulo'=>'Banco Société Générale Brasil S.A.'],
        ['codigo'=>'637', 'titulo'=>'Banco Sofisa S.A.'],
        ['codigo'=>'12', 'titulo'=>'Banco Standard de Investimentos S.A.'],
        ['codigo'=>'464', 'titulo'=>'Banco Sumitomo Mitsui Brasileiro S.A.'],
        ['codigo'=>'082-5', 'titulo'=>'Banco Topázio S.A.'],
        ['codigo'=>'M20', 'titulo'=>'Banco Toyota do Brasil S.A.'],
        ['codigo'=>'M13', 'titulo'=>'Banco Tricury S.A.'],
        ['codigo'=>'634', 'titulo'=>'Banco Triângulo S.A.'],
        ['codigo'=>'M14', 'titulo'=>'Banco Volkswagen S.A.'],
        ['codigo'=>'M23', 'titulo'=>'Banco Volvo (Brasil) S.A.'],
        ['codigo'=>'655', 'titulo'=>'Banco Votorantim S.A.'],
        ['codigo'=>'610', 'titulo'=>'Banco VR S.A.'],
        ['codigo'=>'370', 'titulo'=>'Banco WestLB do Brasil S.A.'],
        ['codigo'=>'21', 'titulo'=>'BANESTES S.A. Banco do Estado do Espírito Santo'],
        ['codigo'=>'719', 'titulo'=>'Banif-Banco Internacional do Funchal (Brasil)S.A.'],
        ['codigo'=>'755', 'titulo'=>'Bank of America Merrill Lynch Banco Múltiplo S.A.'],
        ['codigo'=>'744', 'titulo'=>'BankBoston N.A.'],
        ['codigo'=>'73', 'titulo'=>'BB Banco Popular do Brasil S.A.'],
        ['codigo'=>'78', 'titulo'=>'BES Investimento do Brasil S.A.-Banco de Investimento'],
        ['codigo'=>'69', 'titulo'=>'BPN Brasil Banco Múltiplo S.A.'],
        ['codigo'=>'70', 'titulo'=>'BRB - Banco de Brasília S.A.'],
        ['codigo'=>'092-2', 'titulo'=>'Brickell S.A. Crédito, financiamento e Investimento'],
        ['codigo'=>'104', 'titulo'=>'Caixa Econômica Federal'],
        ['codigo'=>'477', 'titulo'=>'Citibank N.A.'],
        ['codigo'=>'081-7', 'titulo'=>'Concórdia Banco S.A.'],
        ['codigo'=>'097-3', 'titulo'=>'Cooperativa Central de Crédito Noroeste Brasileiro Ltda.'],
        ['codigo'=>'085-x', 'titulo'=>'Cooperativa Central de Crédito Urbano-CECRED'],
        ['codigo'=>'099-x', 'titulo'=>'Cooperativa Central de Economia e Credito Mutuo das Unicreds'],
        ['codigo'=>'090-2', 'titulo'=>'Cooperativa Central de Economia e Crédito Mutuo das Unicreds'],
        ['codigo'=>'089-2', 'titulo'=>'Cooperativa de Crédito Rural da Região de Mogiana'],
        ['codigo'=>'087-6', 'titulo'=>'Cooperativa Unicred Central Santa Catarina'],
        ['codigo'=>'098-1', 'titulo'=>'Credicorol Cooperativa de Crédito Rural'],
        ['codigo'=>'487', 'titulo'=>'Deutsche Bank S.A. - Banco Alemão'],
        ['codigo'=>'751', 'titulo'=>'Dresdner Bank Brasil S.A. - Banco Múltiplo'],
        ['codigo'=>'64', 'titulo'=>'Goldman Sachs do Brasil Banco Múltiplo S.A.'],
        ['codigo'=>'62', 'titulo'=>'Hipercard Banco Múltiplo S.A.'],
        ['codigo'=>'399', 'titulo'=>'HSBC Bank Brasil S.A. - Banco Múltiplo'],
        ['codigo'=>'168', 'titulo'=>'HSBC Finance (Brasil) S.A. - Banco Múltiplo'],
        ['codigo'=>'492', 'titulo'=>'ING Bank N.V.'],
        ['codigo'=>'652', 'titulo'=>'Itaú Unibanco Holding S.A.'],
        ['codigo'=>'341', 'titulo'=>'Itaú Unibanco S.A.'],
        ['codigo'=>'79', 'titulo'=>'JBS Banco S.A.'],
        ['codigo'=>'488', 'titulo'=>'JPMorgan Chase Bank'],
        ['codigo'=>'14', 'titulo'=>'Natixis Brasil S.A. Banco Múltiplo'],
        ['codigo'=>'753', 'titulo'=>'NBC Bank Brasil S.A. - Banco Múltiplo'],
        ['codigo'=>'086-8', 'titulo'=>'OBOE Crédito Financiamento e Investimento S.A.'],
        ['codigo'=>'254', 'titulo'=>'Paraná Banco S.A.'],
        ['codigo'=>'409', 'titulo'=>'UNIBANCO - União de Bancos Brasileiros S.A.'],
        ['codigo'=>'230', 'titulo'=>'Unicard Banco Múltiplo S.A.'],
        ['codigo'=>'091-4', 'titulo'=>'Unicred Central do Rio Grande do Sul'],
        ['codigo'=>'84', 'titulo'=>'Unicred Norte do Paraná'],
      ];

      DB::table('bancos')->insert($data);
    }
}
