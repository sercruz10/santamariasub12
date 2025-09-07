<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SergioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sergio')->insert([
            ['id'=>1,'full_name'=>'Tomás da Silva Macedo','name'=>'Tomás Macedo','year'=>'2013','full_birthday'=>'2013-06-14','position'=>'AV','number'=>'30','isCaptain'=>'','birthday'=>'14-Jun','shirtSize'=>'12','active'=>1],
            ['id'=>2,'full_name'=>null,'name'=>'Micael Tristão','year'=>'2013','full_birthday'=>'2013-04-19','position'=>'MD / AV','number'=>'29','isCaptain'=>'','birthday'=>'19-Apr','shirtSize'=>'14','active'=>1],
            ['id'=>3,'full_name'=>'Afonso Lourenço Renaut Soares','name'=>'Afonso Renault','year'=>'2013','full_birthday'=>'2013-02-19','position'=>'AV','number'=>'47','isCaptain'=>'','birthday'=>'19-Feb','shirtSize'=>'16','active'=>1],
            ['id'=>4,'full_name'=>'Fábio Pereira Falcão','name'=>'Fábio Falcão','year'=>'2013','full_birthday'=>'2013-10-17','position'=>'MD / ME','number'=>'16','isCaptain'=>'','birthday'=>'17-Oct','shirtSize'=>'12','active'=>1],
            ['id'=>5,'full_name'=>'Afonso Azevedo Pereira','name'=>'Afonso Pereira','year'=>'2013','full_birthday'=>'2013-06-03','position'=>'MD / ME','number'=>'6','isCaptain'=>'','birthday'=>'3-Jun','shirtSize'=>'14','active'=>1],
            ['id'=>6,'full_name'=>null,'name'=>'Afonso Bogas','year'=>'2013','full_birthday'=>null,'position'=>'MD / ME','number'=>'10','isCaptain'=>'','birthday'=>'28-Jan','shirtSize'=>'14','active'=>0],
            ['id'=>7,'full_name'=>null,'name'=>'Afonso Sousa','year'=>'2013','full_birthday'=>null,'position'=>'GR','number'=>'17','isCaptain'=>'','birthday'=>'10-Jun','shirtSize'=>'12','active'=>1],
            ['id'=>8,'full_name'=>'Francisco Carvalho Pinto','name'=>'Francisco Pinto','year'=>'2013','full_birthday'=>'2013-08-01','position'=>'GR','number'=>'99','isCaptain'=>'','birthday'=>'1-Aug','shirtSize'=>'16','active'=>1],
            ['id'=>9,'full_name'=>null,'name'=>'Guilherme Sidónio','year'=>'2013','full_birthday'=>'2013-01-14','position'=>'DD / DE','number'=>'19','isCaptain'=>'','birthday'=>'14-Jan','shirtSize'=>'14','active'=>1],
            ['id'=>10,'full_name'=>null,'name'=>'Hugo Costa','year'=>'2013','full_birthday'=>null,'position'=>'MD / AV','number'=>'9','isCaptain'=>'','birthday'=>'10-Apr','shirtSize'=>'14','active'=>1],
            ['id'=>11,'full_name'=>'Kalleby Henrique Borges Da Silva','name'=>'Kalleby Silva','year'=>'2013','full_birthday'=>'2013-07-20','position'=>'MC','number'=>'5','isCaptain'=>'','birthday'=>'20-Jul','shirtSize'=>'12','active'=>1],
            ['id'=>12,'full_name'=>'Lucas Dinis Rosa Amorim','name'=>'Lucas Amorim','year'=>'2013','full_birthday'=>'2013-05-23','position'=>'MC / AV','number'=>'8','isCaptain'=>'','birthday'=>'23-May','shirtSize'=>'12','active'=>1],
            ['id'=>13,'full_name'=>null,'name'=>'Martim Araújo','year'=>'2013','full_birthday'=>null,'position'=>'DD','number'=>'75','isCaptain'=>'','birthday'=>'8-Mar','shirtSize'=>'12','active'=>1],
            ['id'=>14,'full_name'=>null,'name'=>'Miguel Rodrigues','year'=>'2013','full_birthday'=>null,'position'=>'MC / DD','number'=>'11','isCaptain'=>'','birthday'=>'29-Jun','shirtSize'=>'12','active'=>1],
            ['id'=>15,'full_name'=>'Nathanael Barbosa Fernandes','name'=>'Nathanael Fernandes','year'=>'2013','full_birthday'=>'2013-12-19','position'=>'AV','number'=>'13','isCaptain'=>'','birthday'=>'19-Dec','shirtSize'=>'12','active'=>1],
            ['id'=>16,'full_name'=>'Santiago Gonçalves Costa','name'=>'Santiago Costa','year'=>'2013','full_birthday'=>'2013-04-08','position'=>'DD / MD','number'=>'70','isCaptain'=>'','birthday'=>'8-Apr','shirtSize'=>'10','active'=>1],
            ['id'=>17,'full_name'=>'Carlos Diogo Pimenta Campos','name'=>'Diogo Campos','year'=>'2013','full_birthday'=>'2013-02-15','position'=>'DE / DC','number'=>'25','isCaptain'=>'','birthday'=>'15-Feb','shirtSize'=>'16','active'=>1],
            ['id'=>18,'full_name'=>'Martim Ferreira da Costa','name'=>'Martim Costa','year'=>'2013','full_birthday'=>'2013-06-01','position'=>'MC / MD','number'=>'20','isCaptain'=>'','birthday'=>'1-Jun','shirtSize'=>'12','active'=>1],
            ['id'=>19,'full_name'=>'Gonçalo Nicolau Barbosa','name'=>'Gonçalo Barbosa (Nico)','year'=>'2013','full_birthday'=>'2013-07-18','position'=>'ME / MD / MC','number'=>'77','isCaptain'=>'','birthday'=>'18-Jul','shirtSize'=>'10','active'=>1],
            ['id'=>20,'full_name'=>'Rodrigo Gonçalves Amorim','name'=>'Rodrigo Amorim','year'=>'2013','full_birthday'=>null,'position'=>'ME / MD / AV','number'=>'79','isCaptain'=>'','birthday'=>'19-Jul','shirtSize'=>'14','active'=>1],
            ['id'=>21,'full_name'=>null,'name'=>'Miguel Junior Cerqueira','year'=>'2013','full_birthday'=>null,'position'=>'DC','number'=>'26','isCaptain'=>'','birthday'=>'15-May','shirtSize'=>'14','active'=>1],
            ['id'=>22,'full_name'=>null,'name'=>'Gabriel Dias','year'=>'2014','full_birthday'=>null,'position'=>'GR','number'=>'1','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>23,'full_name'=>'Rodrigo Cardoso Abreu','name'=>'Rodrigo Abreu','year'=>'2014','full_birthday'=>null,'position'=>'DC / DD','number'=>'3','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>24,'full_name'=>'Diogo Macedo Pinheiro','name'=>'Diogo Pinheiro','year'=>'2014','full_birthday'=>'2014-10-23','position'=>'DC / DD','number'=>'4','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>25,'full_name'=>'Sandro Samuel Araujo Bessa','name'=>'Sandro','year'=>'2014','full_birthday'=>'2014-01-12','position'=>'DC','number'=>'5','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>26,'full_name'=>'','name'=>'Gonçalo','year'=>'2014','full_birthday'=>null,'position'=>'MC / MD','number'=>'7','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>27,'full_name'=>'Daniel Pereira Azevedo','name'=>'Daniel Azevedo','year'=>'2014','full_birthday'=>'2014-09-10','position'=>'MC','number'=>'8','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>28,'full_name'=>null,'name'=>'Gabriela','year'=>'2014','full_birthday'=>null,'position'=>'AV','number'=>'9','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>0],
            ['id'=>29,'full_name'=>null,'name'=>'Afonso Silva','year'=>'2014','full_birthday'=>null,'position'=>'MD','number'=>'10','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>30,'full_name'=>null,'name'=>'Tomás Dias','year'=>'2014','full_birthday'=>null,'position'=>'AV','number'=>'11','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>31,'full_name'=>'Martim Costa Machado','name'=>'Martim','year'=>'2014','full_birthday'=>null,'position'=>'GR','number'=>'12','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>32,'full_name'=>null,'name'=>'Miguel','year'=>'2014','full_birthday'=>null,'position'=>'GR','number'=>'42','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>33,'full_name'=>'Dinis José Faria da Costa','name'=>'Dinis Costa','year'=>'2014','full_birthday'=>null,'position'=>'MC','number'=>'19','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>34,'full_name'=>null,'name'=>'Kevin Pacheco','year'=>'2014','full_birthday'=>null,'position'=>'MD','number'=>'23','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>35,'full_name'=>'Nuno Faria Araújo','name'=>'Nuno Araújo','year'=>'2014','full_birthday'=>'2014-12-01','position'=>'ME','number'=>'26','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>36,'full_name'=>'Tomás Ferreira Amorim','name'=>'Ferreira','year'=>'2014','full_birthday'=>'2014-01-25','position'=>'DC','number'=>'28','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>37,'full_name'=>null,'name'=>'Cidália','year'=>'2014','full_birthday'=>null,'position'=>'DD','number'=>'29','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>0],
            ['id'=>38,'full_name'=>'Dinis Fernandes Coelho','name'=>'Dinis Coelho','year'=>'2014','full_birthday'=>'2014-06-12','position'=>'MC','number'=>'36','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>39,'full_name'=>'Afonso Resende Costa','name'=>'Afonso Costa','year'=>'2014','full_birthday'=>'2014-10-25','position'=>'MD / ME','number'=>'33','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>40,'full_name'=>'Gustavo Faria Carvalho','name'=>'Gustavo Carvalho','year'=>'2014','full_birthday'=>'2014-01-03','position'=>'GR','number'=>'90','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>41,'full_name'=>'Matias Sambento Sousa','name'=>'Matias','year'=>'2014','full_birthday'=>'2014-09-18','position'=>'DC','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>42,'full_name'=>null,'name'=>'Miguel Carvalho','year'=>'2014','full_birthday'=>null,'position'=>'MD','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>43,'full_name'=>null,'name'=>'Guilherme Vale','year'=>'2014','full_birthday'=>null,'position'=>'MD','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>44,'full_name'=>'Manuel Maria Matos Leite de Sampaio Maia','name'=>'Manuel Maia','year'=>'2013','full_birthday'=>'2013-10-28','position'=>'MD','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>45,'full_name'=>null,'name'=>'Miguel Cordeiro *','year'=>'','full_birthday'=>null,'position'=>'MC','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>46,'full_name'=>null,'name'=>'Dyego Gonçalves *','year'=>'','full_birthday'=>null,'position'=>'MC/AV','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>47,'full_name'=>'Francisco Roque Grilo De Faria Machado','name'=>'Francisco M.*','year'=>'','full_birthday'=>null,'position'=>'DD','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>48,'full_name'=>'Rodrigo Filipe Barros Santos','name'=>'Rodrigo Santos','year'=>'','full_birthday'=>'2014-04-07','position'=>'DE DC','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>49,'full_name'=>'Pedro Miranda Magalhães','name'=>'Pedro Magalhães','year'=>'','full_birthday'=>'2014-01-04','position'=>'MC/MD','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>50,'full_name'=>null,'name'=>'Duarte (Lomar)','year'=>'','full_birthday'=>null,'position'=>'ME/AV','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>51,'full_name'=>'João Faria Neto','name'=>'João Neto ','year'=>'2014','full_birthday'=>null,'position'=>'EE','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>52,'full_name'=>null,'name'=>'Gonçalo Neiva','year'=>'2013','full_birthday'=>null,'position'=>'DE','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>53,'full_name'=>null,'name'=>'Francisco Rodrigues','year'=>'2015','full_birthday'=>null,'position'=>'DC / DD','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>54,'full_name'=>null,'name'=>'António Pedrosa ','year'=>'','full_birthday'=>null,'position'=>'DD/DE','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>55,'full_name'=>null,'name'=>'Gabriel','year'=>'','full_birthday'=>null,'position'=>'AV','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>56,'full_name'=>null,'name'=>'Kalleby II','year'=>'','full_birthday'=>null,'position'=>'MC / MD','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>57,'full_name'=>null,'name'=>'Gonçalo II','year'=>'','full_birthday'=>null,'position'=>'AV / MD','number'=>'','isCaptain'=>'','birthday'=>'','shirtSize'=>'','active'=>1],
            ['id'=>58,'full_name'=>null,'name'=>'Daniel Silva','year'=>null,'full_birthday'=>null,'position'=>null,'number'=>null,'isCaptain'=>null,'birthday'=>null,'shirtSize'=>null,'active'=>1],
        ]);
    }
}
