<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Projetinho de estudo usando como base o tutorial do site PositronX <https://www.positronx.io/laravel-import-records-in-sql-with-csv-and-seeder-tutorial/>

## Configure seu arquivo .env

DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=database_name <br>
DB_USERNAME=database_username <br>
DB_PASSWORD=database_password <br>

## Crie o arquivo CSV

Transaction_date,Price,Payment_Type,Name,City,Zip
01/11/2009 17:28,1200,Visa,Sophie,Newtown,6470
01/03/2009 21:11,1200,Mastercard,asuncion,Centennial,80112
01/23/2009 11:33,1200,Mastercard,Sandrine,Walnut Creek,94596
01/07/2009 19:06,3600,Amex,Brittany,Orlando,32801
01/05/2009 19:29,1200,Visa,Carmen,Arlington,22201
01/25/2009 8:54,1200,Amex,Corinne,Anthem,85086
01/12/2009 8:05,1200,Amex,Francoise,Danville,17821
01/15/2009 8:12,1200,Visa,Katherine,Marietta,30060
01/19/2009 14:53,1200,Mastercard,Laura,Fairfield,52556
01/11/2009 6:01,1200,Mastercard,Anna,New York,10007
01/18/2009 11:17,1200,Amex,Rachel,Atascadero,93422
01/17/2009 3:22,1200,Visa,Rachel,Fresno,93702
01/12/2009 20:43,1200,Visa,Alicja,Kenmore,98028
01/05/2009 10:25,1200,Amex,linda,Arlington,22201
01/06/2009 16:08,3600,Visa,cristina,Seattle,98104
01/13/2009 5:58,1200,Mastercard,Kit,Suwanee,30024
01/01/2009 9:35,1200,Mastercard,Barbara,La Crescenta,91214
01/16/2009 11:49,1200,Mastercard,Yoko,Andover,1810
01/13/2009 11:54,1200,Visa,alice and rudolf,Baltimore,21224
01/15/2009 9:52,1200,Amex,Mark,Holmdel,7733
01/27/2009 8:11,1200,Visa,Helena,Fremont,94538
01/21/2009 9:07,1200,Visa,Elaine,Vienna,22180
01/25/2009 19:59,1200,Visa,Kim,Seattle,98104
01/10/2009 21:36,1200,Visa,Craig,Seattle,98104
01/28/2009 20:59,1200,Visa,Michele,Austin,78701
01/05/2009 12:41,1200,Mastercard,Kathryn,Pacific Beach,92109
01/30/2009 19:12,1200,Diners,Heather,Ooltewah,37363
01/19/2009 8:52,1200,Visa,Pam,Richmond,77469
01/28/2009 20:44,1200,Visa,Whitney,Falmouth,22405
01/06/2009 16:07,1200,Visa,Margaret,Terrell Hills,78205
01/23/2009 21:41,1200,Visa,Joanne,Oak Park,48237
01/09/2009 19:41,1200,Mastercard,Tarah,San Jose,95113
01/07/2009 13:49,1200,Diners,megan,West Hills,91303
01/12/2009 14:50,1200,Visa,Holly,Arlington,2476
01/07/2009 20:15,1200,Amex,Nicole,Houston,77002
01/07/2009 15:12,3600,Visa,Anabela,Flossmoor,60422
01/07/2009 7:44,1200,Mastercard,Marie,Ball Ground,30107
01/06/2009 22:19,3600,Amex,Ritz,Pittsfield,5762
01/06/2009 23:00,3600,Amex,Sylvia,Pittsfield,5762
01/09/2009 6:39,1200,Mastercard,Anneli,Houston,77002
01/08/2009 16:24,1200,Visa,jennifer,Phoenix,85004
01/06/2009 7:46,1200,Amex,Kelly,Reston,20190
01/03/2009 9:03,1200,Diners,Sheila,Brooklyn,11226
01/08/2009 3:16,1200,Mastercard,Linda,Miami,33130
01/08/2009 3:56,1200,Mastercard,Katherine,New York,10007
01/08/2009 0:42,1200,Visa,Family,Los Gatos,95032
01/01/2009 20:21,1200,Visa,Maxine,Morton,61550
01/07/2009 8:08,1200,Diners,Bryan Kerrene,New York,10007
01/01/2009 2:24,1200,Visa,Lisa,Sugar Land,77478
01/06/2009 7:18,1200,Visa,asuman,Chula Vista,91910
01/02/2009 7:35,1200,Diners,Hani,Salt Lake City,84111
01/02/2009 14:18,1200,Visa,Richard,Riverside,8075
01/05/2009 10:08,1200,Visa,Georgia,Eagle,83616
01/02/2009 9:16,1200,Mastercard,Sean,Shavano Park,78230
01/05/2009 2:42,1200,Diners,Stacy,New York,10002
01/02/2009 20:09,1200,Mastercard,adam,Martin,38237
01/04/2009 20:11,1200,Mastercard,Fleur,Peoria,61601
01/04/2009 13:19,1200,Visa,LAURENCE,Mickleton,8056
01/04/2009 12:56,3600,Visa,Gerd W,Cahaba Heights,35243
01/03/2009 9:58,1200,Visa,Anja,Gainesville,20155
01/06/2009 15:12,1200,Amex,lydia,Sandy Plains,30075
01/24/2009 11:05,1200,Visa,alan,Norcross,30071
01/24/2009 7:14,1200,Mastercard,nihan,Roanoke,24018
01/18/2009 6:09,1200,Mastercard,Ignacio,Engleside,22314
01/04/2009 13:20,1200,Mastercard,Nuria,Superior,80027
01/02/2009 9:57,1200,Amex,leigh,Potomac Falls,20165
01/31/2009 11:14,3600,Mastercard,Ulrika,Scottsdale,85251
01/11/2009 14:07,1200,Visa,Sarah,San Francisco,94103
01/31/2009 8:56,1200,Mastercard,Laura,Coconut Grove,33133
01/31/2009 7:22,1200,Visa,Monica,Weston,6883
01/30/2009 20:36,1200,Visa,Renee,Edinburg,78539
01/08/2009 13:19,1200,Mastercard,valerie et nicolas,Glenn Dale,20706
01/26/2009 11:38,1200,Mastercard,Gabriella,Austin,78701
01/07/2009 18:53,1200,Visa,Marie-Christine,Durham,27701
01/19/2009 10:32,1200,Mastercard,Maie,Queen Creek,85142
01/26/2009 12:05,1250,Mastercard,verena,Queen Creek,85142
01/02/2009 9:31,1200,Visa,camilla,Chicago,60608
01/11/2009 12:22,1200,Visa,Marina,Minneapolis,55401
01/02/2009 13:08,1200,Mastercard,Federica e Andrea,Astoria,97103
01/22/2009 22:16,3600,Mastercard,leanne,Clyde Hill,98004
01/29/2009 15:08,1200,Visa,KERRY,Sunnyvale,94086
01/29/2009 10:09,3600,Mastercard,Jacqui,Scottsdale,85251
01/29/2009 12:28,1200,Mastercard,Alva and Martin,Great Falls,22066
01/23/2009 15:33,1200,Mastercard,T,Brooklyn,11226
01/09/2009 15:24,1200,Mastercard,alex,Farmingtn Hls,48336
01/13/2009 18:08,1200,Amex,Amanda,Houston,77002
01/29/2009 5:30,1200,Diners,Vanessa,Ithaca,14850
01/29/2009 5:43,1200,Visa,Mrs,Sunnyvale,94086
01/28/2009 13:07,1200,Amex,BALA,Accokeek,20607
01/18/2009 4:01,1200,Visa,Eleanor,Fairbanks,99701
01/12/2009 18:24,1200,Diners,Anthony,Victor,14564
01/05/2009 10:49,3600,Amex,Courtney,Mililani,96782
01/05/2009 13:46,1200,Visa,Courtney,Atchison,66002
01/04/2009 17:54,1200,Amex,ruth,Encinitas,92024
01/18/2009 8:56,1200,Mastercard,Stanford,Howell,48843
01/07/2009 12:55,1200,Amex,Fiona,Stamford,6901
01/14/2009 12:07,1200,Mastercard,Lainey,Lakeville,55044
01/28/2009 12:31,1200,Diners,lilia,Brooklyn,11226
01/02/2009 12:16,1200,Mastercard,Monique,Waldorf,20603

## Dispare o Seeder

php artisan db:seed --class=TransactionSeeder
