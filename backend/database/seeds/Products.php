<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Isolation Mask against COVID 19','Rs.10.00','To provide adujstable and leakproof fitting','https://assets-mkpbg.gem.gov.in/img/othe/5682585/60/ad/2.jpg.c503fc60ad.999x420x420.jpg','https://mkp.gem.gov.in/surgical-isolation-surgical-masks/isolation-mask-against-covid-19/p-5116877-34589172512-cat.html#variant_id=5116877-34589172512'],
['SURGICAL MASK FOR COVID - 19 PROTECTION','Rs.6.00','To provide adujstable and leakproof fitting ','https://assets-mkpbg.gem.gov.in/img/othe/3414103/2e/e4/f16e1fc850c743bbac92f9ab0c241f51.jpg.6a236f2ee4.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/surgical-isolation-surgical-masks/surgical-mask-covid-19-protection/p-5116877-65766599569-cat.html#variant_id=5116877-65766599569'],
['Disposable BedSheets for covid 19 ','Rs.87.00','Hospitals, Clinics, Laboratory, Operation theatre etc. for patients','https://assets-mkpbg.gem.gov.in/img/othe/0157517/af/74/disposablebedsheet500x500.jpg.3b205caf74.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/disposable-bed-sheets-health-care-facility/disposable-bedsheets-covid-19/p-5116877-7649909497-cat.html#variant_id=5116877-7649909497'],
['Peak Cap Protective COVID 19 Warrior','Rs.96.00','','https://assets-mkpbg.gem.gov.in/img/othe/8646468/9d/3a/aimscovidcap500x500.jpeg.8738fd9d3a.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/peak-cap/peak-cap-protective-covid-19-warrior/p-5116877-15886966830-cat.html#variant_id=5116877-15886966830'],
['Biological Isolation Chamber','Rs.394,999.00','','https://assets-mkpbg.gem.gov.in/img/othe/2614221/de/a7/fumehoodcopy.jpg.f34ba5dea7.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/fume-hoods-laboratory-with-cubboard/biological-isolation-chamber-best-covid-19-application/p-5116877-52692731425-cat.html#variant_id=5116877-52692731425'],
['Clear & Sure Novel Coronavirus (COVID-19) Sample Collection Kit 1 Tube of Viral Transport Media with 2 Swabs','Rs.211.86','To collect and transport samples for COVID-19 testing','https://assets-mkpbg.gem.gov.in/img/othe/0755005/1e/05/vtmkit.jpeg.dafb751e05.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/novel-coronavirus-covid-19-sample-collection-kit/novel-coronavirus-covid-19-sample-collection-kit-1/p-5116877-2709635628-cat.html#variant_id=5116877-2709635628'],
['TITAN BIOTECH Novel Coronavirus (COVID-19) Sample Collection Kit 1 Tube of Viral Transport Media with 2 Swabs','Rs.249.00','To collect and transport samples for COVID-19 testing','https://assets-mkpbg.gem.gov.in/img/othe/6170668/9e/bd/titan.jpg.506c5c9ebd.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/novel-coronavirus-covid-19-sample-collection-kit/novel-coronavirus-transport-kit-covid-19/p-5116877-2238352290-cat.html#variant_id=5116877-2238352290'],
['Automatic disinfected tunnel help you to disinfect from COVID-19','Rs.380,000.00','','https://assets-mkpbg.gem.gov.in/img/othe/7746016/64/5e/sanitizingtunnel.png.92ff5e645e.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/high-pressure-washer/automatic-disinfected-tunnel-help-you-disinfect-covid-19/p-5116877-34299498486-cat.html#variant_id=5116877-34299498486'],
['Himedia Novel Coronavirus (COVID-19) Sample Collection Kit 1 Tube of Viral Transport Media with 1 Swab ','Rs.202.50','To collect and transport samples for COVID-19 testing','https://assets-mkpbg.gem.gov.in/img/othe/6587538/a0/ba/screenshot2020040213515853.png.360808a0ba.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/novel-coronavirus-covid-19-sample-collection-kit/novel-coronavirus-covid-19-sample-collection-kit/p-5116877-59418287422-cat.html#variant_id=5116877-59418287422'],
['Saviour Covid-19 Face Shield','Rs.200.00','','https://assets-mkpbg.gem.gov.in/img/othe/3842126/a8/42/faceshield.jpg.e804b4a842.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/surgical-isolation-faceshield/saviour-covid-19-face-shield/p-5116877-23245318017-cat.html#variant_id=5116877-23245318017'],
['Corona Covid19 Poster ','Rs.1.20','','https://assets-mkpbg.gem.gov.in/img/othe/5717140/a5/2e/pc14.jpeg.124165a52e.999x420x420.jpg','https://assets-mkpbg.gem.gov.in/posters/corona-covid19-poster/p-5116877-99044489950-cat.html#variant_id=5116877-99044489950'],
];

foreach($data as $row){

         DB::table('products')->insert([
            'title'=>$row[0],
            'price'=>$row[1],
            'description'=>$row[2],
            'image_url'=>$row[3],
            'link'=>$row[4]
        ]);
         }
    }
}
