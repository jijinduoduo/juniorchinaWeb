<?php if (!defined('THINK_PATH')) exit(); $sum = count($comment_data1); ?>           
               
<div id="chartdiv" style="width:600px; height:400px; background-color:#FFFFFF"></div>
        
        <script type="text/javascript">
        
            var params = 
            {
                bgcolor:"#FFFFFF"
            };
            
            var flashVars = 
            {
                path: "/juniorchina_web/Public/Home/js/amcharts/flash/",          
                // settings_file: "../sampleData/column_settings.xml",
                // data_file: "../sampleData/column_data.xml"               
//              chart_data: "1930;-0.164;-0.219\n1931;-0.124;-0.205\n1932;-0.154;-0.189\n1933;-0.296;-0.172\n1934;-0.158;-0.151\n1935;-0.183;-0.128\n1936;-0.152;-0.103\n1937;-0.033;-0.078\n1938;0.009;-0.054\n1939;0.000;-0.035\n1940;0.020;-0.023\n1941;0.079;-0.018\n1942;-0.029;-0.022\n1943;-0.025;-0.033\n1944;0.122;-0.052\n1945;-0.002;-0.076\n1946;-0.204;-0.102\n1947;-0.196;-0.126\n1948;-0.203;-0.147\n1949;-0.210;-0.162\n1950;-0.307;-0.171\n1951;-0.168;-0.175\n1952;-0.073;-0.176\n1953;-0.027;-0.174\n1954;-0.251;-0.169\n1955;-0.281;-0.162\n1956;-0.348;-0.151\n1957;-0.074;-0.139\n1958;-0.011;-0.125\n1959;-0.074;-0.114\n1960;-0.124;-0.106\n1961;-0.024;-0.104\n1962;-0.022;-0.108\n1963;0.000;-0.114\n1964;-0.296;-0.120\n1965;-0.217;-0.125\n1966;-0.147;-0.127\n1967;-0.150;-0.125\n1968;-0.160;-0.120\n1969;-0.011;-0.114\n1970;-0.068;-0.108\n1971;-0.190;-0.104\n1972;-0.056;-0.100\n1973;0.077;-0.097\n1974;-0.213;-0.091\n1975;-0.170;-0.082\n1976;-0.254;-0.068\n1977;0.019;-0.050\n1978;-0.063;-0.028\n1979;0.050;-0.006\n1980;0.077;0.015\n1981;0.120;0.032\n1982;0.011;0.046\n1983;0.177;0.058\n1984;-0.021;0.069\n1985;-0.037;0.081\n1986;0.030;0.094\n1987;0.179;0.108\n1988;0.180;0.123\n1989;0.104;0.137\n1990;0.255;0.150\n1991;0.210;0.163\n1992;0.065;0.178\n1993;0.110;0.195\n1994;0.172;0.216\n1995;0.269;0.241\n1996;0.141;0.268\n1997;0.353;0.296\n1998;0.548;0.323\n1999;0.298;0.348\n2000;0.267;0.370\n2001;0.411;0.389\n2002;0.462;0.404\n2003;0.470;0.415\n2004;0.445;0.422\n2005;0.470;0.426",

                chart_data:"<?php
for($i=$sum-1;$i>=0;$i--){ $value_time=$comment_data1[$i]['value_time']; $share_value=$comment_data1[$i]['share_value']; echo $value_time.';'.$share_value.';'.$share_value.'\n'; } ?>",
                chart_settings: "<settings><hide_bullets_count>18</hide_bullets_count><data_type>csv</data_type><plot_area><margins><left>50</left><right>40</right><top>55</top><bottom>30</bottom></margins></plot_area><grid><x><alpha>10</alpha><approx_count>8</approx_count></x><y_left><alpha>10</alpha></y_left></grid><axes><x><width>1</width><color>0D8ECF</color></x><y_left><width>1</width><color>0D8ECF</color></y_left></axes><indicator><color>0D8ECF</color><x_balloon_text_color>FFFFFF</x_balloon_text_color><line_alpha>50</line_alpha><selection_color>0D8ECF</selection_color><selection_alpha>20</selection_alpha></indicator><zoom_out_button><text_color_hover>FF0F00</text_color_hover></zoom_out_button><help><button><color>FCD202</color><text_color>000000</text_color><text_color_hover>FF0F00</text_color_hover></button><balloon><color>FCD202</color><text_color>000000</text_color></balloon></help><graphs><graph gid='0'><title>单位净值</title><color>0D8ECF</color><color_hover>FF0F00</color_hover><selected>0</selected></graph><graph gid='1'><title>净值数</title><color>B0DE09</color><color_hover>FF0F00</color_hover><line_width>2</line_width><fill_alpha>30</fill_alpha><bullet>round</bullet></graph></graphs><labels><label lid='0'><text><![CDATA[<b></b>]]></text><y>15</y><text_size>13</text_size><align>center</align></label></labels></settings>"
            };
            
            // change 8 to 80 to test javascript version
            if (swfobject.hasFlashPlayerVersion("8"))
            {
                swfobject.embedSWF("/juniorchina_web/Public/Home/js/amcharts/flash/amline.swf", "chartdiv", "600", "400", "8.0.0", "../../amcharts/flash/expressInstall.swf", flashVars, params);
            }
            else
            {
                var amFallback = new AmCharts.AmFallback();
                // amFallback.settingsFile = flashVars.settings_file;  		// doesn't support multiple settings files or additional_chart_settins as flash does
                // amFallback.dataFile = flashVars.data_file;
                amFallback.chartSettings = flashVars.chart_settings;
                amFallback.pathToImages = "/juniorchina_web/Public/Home/js/amcharts/images/";
                amFallback.chartData = flashVars.chart_data;
                amFallback.type = "line";
                amFallback.write("chartdiv");
            }
        
        </script>