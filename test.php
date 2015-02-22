<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Process (Prakriya)</title>
		<!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
     <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
   
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Citizenship Certificate issued on 2011'
        },
        subtitle: {
            text: 'Source: <a href="#">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Citizenship per Region'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Total: <b>{point.y:.1f} %</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Eastern', 21.36],
                ['Central', 27.71],
                ['Western', 27.47],
                ['Mid Western', 14.37],
                ['Far Western', 9.08],
                
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});

$(function () {
    $('#central').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Central Region'
        },
        subtitle: {
            text: 'Source: <a href="#">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Central'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Total: <b>{point.y:.1f} %</b>'
        },
        series: [{
            name: 'Population',
            data: [
				['Dhanusa', 6.210025801], 
				['Mahottari', 5.260036181], 
				['Sarlahi', 5.297106535], 
				['Sindhuli', 3.591375953], 
				['Ramechhap', 3.342757441], 
				['Dolakha', 2.936960626], 
				['Sindhupalchok', 5.205172056], 
				['Kavre', 7.349815637], 
				['Lalitpur', 4.932334246], 
				['Bhaktapur', 4.327346059], 
				['Kathmandu', 10.77907057], 
				['Nuwakot', 4.62539171], 
				['Rasuwa', 1.053292342], 
				['Dhading', 5.47949268], 
				['Makwanpur', 6.493737581], 
				['Rautahat', 5.418697298], 
				['Bara', 7.743749938], 
				['Parsa', 2.00970749], 
				['Chitawan', 7.943929853], 
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});

$(function () {
    $('#western').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Western Region'
        },
        subtitle: {
            text: 'Source: <a href="#">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Western'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Total: <b>{point.y:.1f} %</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Gorkha', 4.469240319], 
				['Bara', 7.811199027], 
				['Parsa', 2.027212309], 
				['Chitawan', 8.013122535], 
				['Gorkha', 4.469240319], 
				['Lamjung', 2.612042618], 
				['Tanahu', 5.281421541], 
				['Syangja', 5.720168918], 
				['Kaski', 6.678433074], 
				['Manang', 0.089245205], 
				['Mustang', 0.187464788], 
				['Myagdi', 3.852999686], 
				['Parbat', 2.817456163], 
				['Baglung', 4.365037817], 
				['Gulmi', 5.253002677], 
				['Palpa', 5.38761835], 
				['Nawalparasi', 9.552228388], 
				['Rupandehi', 12.16576674], 
				['Kapilbastu', 5.931066804], 
				['Arghakhanchi', 3.316032727],
                
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});

$(function () {
    $('#eastern').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Eastern Region'
        },
        subtitle: {
            text: 'Source: <a href="#">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Eastern'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Total: <b>{point.y:.1f} %</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Taplejung', 2.848750705], 
				['Panchthar', 3.553563183], 
				['Ilam', 4.514904315], 
				['Jhapa', 10.48689139], 
				['Morang', 18.97221795], 
				['Sunsari', 11.26930378], 
				['Dhankuta', 2.540274999], 
				['Terhathum', 1.671925504], 
				['Sankhuwasabha', 3.155302447], 
				['Bhojpur', 5.003591401], 
				['Solukhumbu', 1.715535375], 
				['Okhaldhunga', 3.323970037], 
				['Khotang', 4.428325894], 
				['Udayapur', 5.429428967], 
				['Saptari', 11.77145862], 
				['Siraha', 9.314555436],
                
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});

$(function () {
    $('#mid-western').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Mid Western Region'
        },
        subtitle: {
            text: 'Source: <a href="#">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Mid Western'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Total: <b>{point.y:.1f} %</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Pyuthan', 5.320355771], 
				['Rolpa', 5.148762143], 
				['Rukum', 4.60538232], 
				['Salyan', 7.562512512], 
				['Dang', 14.28993603], 
				['Banke', 9.098275484], 
				['Bardiya', 15.8743172], 
				['Surkhet', 8.354703095], 
				['Dailekh', 5.070591712], 
				['Jajarkot', 3.154462864], 
				['Dolpa', 0.517640778], 
				['Jumla', 3.198314569], 
				['Kalikot', 2.52433293], 
				['Mugu', 14.61882382], 
				['Humla', 0.661588766],
                
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});

$(function () {
    $('#far-western').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Far Western Region'
        },
        subtitle: {
            text: 'Source: <a href="#">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Far Western'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Total: <b>{point.y:.1f} %</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Bajura', 3.850214152], 
				['Bajhang', 7.25251855], 
				['Achham', 12.52035953], 
				['Doti', 6.741268022], 
				['Kailali', 27.25010557], 
				['Kanchanpur', 21.85558304], 
				['Dadeldhura', 5.504614828], 
				['Baitadi', 10.17675092], 
				['Darchaula', 4.848585389],
                
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
		</script>
	</head>
	<body>
<script src="charts/js/highcharts.js"></script>
<script src="charts/js/modules/data.js"></script>
<script src="charts/js/modules/exporting.js"></script>
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Process (Prakriya)</a>
            </div>
           
        </div>
        <!-- /.container -->
    </nav>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Prakriya</h1>
                        <h3>I am a single mother and my children are crying because they are not able to get citizenship.They are like aliens in their own land despite being born in Nepal.</h3>
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <div class="container">
    <br>
    <h2>Procedures</h2>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Procedures for obtaining certificate of citizenship of Nepal by descent:
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
         <p>
<ol><li>A citizen of Nepal, who has completed the age of Sixteen years and
intends to obtain the certificate of citizenship of Nepal by descent, has to
make an application, in the format referred to in Schedule-1, and
accompanied by the following documents, to the concerned Chief District
Officer: 
<ul>
<li>
The certificate of citizenship of Nepal of his or her father
or mother or relative within three generations of his or
her lineage,     
</li>
<li>
    A recommendation made by the concerned Local Body
setting out his or her birth place and relationship or a
certificate of birth registration, 
</li>
<li>
    In the case where the certificate of citizenship of a
relative within three generations of his or her lineage has
been submitted pursuant to Clause (a), a relationship
certificate setting out the relationship with that relative. 
</li>
</ul>
</li>
<li>
    The certificate of citizenship of Nepal may, based on the following
documents, be provided to a citizen of Nepal who fails to submit the
evidence referred to in Sub-rule (1) along with the application: 
<ul>
    <li>
        An on the spot deed of public inquiry, in the format
referred to in Schedule-3, executed by local inhabitants,
who have obtained the certificate of citizenship of Nepal,
, in presence of a representative of the Local Body,
setting out that the applicant is a citizen of Nepal by
descent by virtue of that his father or mother is a citizen
of Nepal and that he or she was born in Nepal and has
been residing permanently within the territory of Nepal
continuingly, 
    </li>
    <li>
        Identification, in the format referred to in Schedule-4,
made on the spot by three citizens of Nepal, who reside
in the concerned Ward and have obtained the certificate
of citizenship of Nepal.
Provided that, if the authority making
recommendation for citizenship or providing citizenship considers that the identifying persons have made
identification doubtfully, such an authority may make
further inquiry into the matter. 
    </li>
</ul>
</li>
<li>
     If a person who was found within the territory of Nepal and has
completed the age of Sixteen years but the whereabouts of his or her father
or mother are not known intends to obtain the certificate of citizenship of
Nepal, such a person has to make an application, in the format referred to in
Schedule-1, accompanied by the following documents, to the concerned
Chief District Officer: 
<ul>
    <li>
        Where such a person has been brought up by a children
home or orphan children protection organization or
association or orphanage which has obtained approval
from the Government of Nepal, the recommendation of
such a home, organization, association or orphanage, 
    </li>
    <li>
        Where any person has obtained guardianship of and
maintained and subsisted that person in accordance with
the laws in force, a copy of the certificate of citizenship
of such a person, 
    </li>
    <li>
        Identification made by the chief of organization
maintaining and subsisting that person in the
organization referred to in Clause (a) or by the person
maintaining and subsisting that person pursuant to
Clause (b). 
    </li>
</ul>
</li>
<li>
     If it is required to further inquire into the matter in relation to the
fatherhood or motherhood of the applicant pursuant to Sub-rule (3), a
recommendation of the Local Body or police report may be required, as per
necessity. 
</li>
<li>
    If, in examining the application received pursuant to Sub-rule(1)
or (3), the applicant is found to be eligible to obtain the certificate of
citizenship of Nepal by descent, the certificate of citizenship of Nepal by
descent may be issued to him or her. 
</li>
<li>
     The column of the certificate of citizenship of the person, whose
fatherhood or motherhood has not been settled, where the name of father or
mother is to be specified shall indicate the matter that the fatherhood or
motherhood has not been traced out and specify the name, surname and
address of the guardian. 
</li>
<li>
     The certificate of citizenship may be issued also based on the
registration records prepared by and provisional slips distributed by the
citizenship teams deputed from time to time prior to the commencement of
this Rule. 
</li>
<li>
    The list of persons who make application for the certificate of
citizenship of Nepal pursuant to Sub-rule (2) has to be made public on the
same day. 
</li>
</ol>
</p>
        </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Procedures for obtaining the certificate of citizenship of Nepal by birth:
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
         <p>
<ol><li>If a citizen of Nepal who has completed the age of Sixteen years intends
to obtain the certificate of citizenship of Nepal by birth pursuant to Subsection
(1) of Section 4 of the Act, such a citizen shall have to make an
application, accompanied by the following documents, to the concerned
Chief District Officer, in the format referred to in Schedule-1:
<ul>
<li>
A recommendation made by the concerned Local Body
setting out the matter that the applicant was born within
Nepal and has been permanently residing in Nepal
continuingly,     
</li>
<li>
    Land ownership registration certificate or tenancy right
certificate or household certificate in his or her name or n the name of his or her family or an evidence
indicating the inclusion of his or her name or his or her
father’s or mother’s name in the electoral rolls prepared
by the Election Commission. 
</li>
<strong>Explanation: </strong>
<p>For the purposes of this Clause, "family"
includes father, mother, step mother, son, unmarried
daughter and also daughter-in-law whether living in an
undivided family or living separately.</p>
</ul>
</li>
<li>
   A person who intends to obtain the certificate of citizenship
pursuant to Sub-rule (1) shall have to make an application to the Chief
District Officer prior to the election of the Constituent Assembly. 

</li>
<li>
     The certificate of citizenship of Nepal may, pursuant to Subsection
(4) of Section 8 of the Act, and based on the following documents, be
provided to a citizen of Nepal who fails to submit the evidence referred to in
Sub-rule (1) along with the application: 
<ul>
    <li>
       An on the spot deed of public inquiry, in the format
referred to in Schedule-5, executed by local inhabitants,
who have obtained the certificate of citizenship of Nepal,
in presence of a representative of the Local Body, setting
out that the applicant was born in Nepal and has been
residing permanently within the territory of Nepal
continuingly,  
    </li>
    <li>
       Identification, in the format referred to in Schedule-4,
made on the spot by three citizens of Nepal, who reside
in the concerned Ward and have obtained the certificate
of citizenship of Nepal.
Provided that, if the authority making
recommendation for citizenship or providing citizenship considers that the identifying persons have made
identification doubtfully, such an authority may make
further inquiry into the matter.  
    </li>
    
</ul>
</li>
<li>
    The Chief District Officer shall have to make decision on the
applications received within the period referred to in Sub-section (3) of
Section 4 of the Act within One month from the date of registration of such
applications. 
</li>
<li>
     If, in examining the application received pursuant to Sub-rule (1)
or (3), the applicant is found to be eligible to obtain the certificate of
citizenship of Nepal by birth, the certificate of citizenship of Nepal by birth
may be issued to him or her  
</li>
<li>
    The list of persons who make application for the certificate of
citizenship of Nepal pursuant to Sub-rule (3) has to be made public on the
same day.  
</li>
</ol>
</p> </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Procedures for obtaining certificate of naturalized citizenship of Nepal on the basis of matrimonial relationship:
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <p>
<ol><li>If a foreign woman who has
matrimonial relationship with a citizen of Nepal intends to obtain the
citizenship of Nepal, she has to make an application, accompanied by the
following documents, to the concerned Chief District Officer, in the format 
referred to in Schedule-7: 
<ul>
<li>
A recommendation made by the concerned Local Body
specifying the matrimonial relationship with the citizen
of Nepal,     
</li>
<li>
   A proof showing that action has been instituted by her to
renounce the foreign citizenship. 
</li>
</ul>
</li>
<li>
  If, in examining the application received pursuant to Sub-rule (1),
the applicant is found to be eligible to obtain the certificate of naturalized 
citizenship of Nepal, the certificate of naturalized citizenship of Nepal may
be issued to her. 
</li>
</ol>
</p></div>
    </div>
  </div>
</div>
    <div class="row">
<h2>Stats</h2>
<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
<br>
<div id="central" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
<br>
<div id="eastern" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
<br>
<div id="western" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
<br>
<div id="mid-western" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
<br>
<div id="far-western" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
</div>
</div>
	</body>
</html>
