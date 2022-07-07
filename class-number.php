<?php
system("clear");
class number {

function multiplication($input,$textz) {
system("clear");
$this->input = fopen ($input,"r");
$this->textz = $textz;
$classx = new number();
echo "\033[1;36m  ------------
< Hello, sayser >
  ------------
          \   ^__^
           \  (oO)\_______
              (__)\       )\/\
               U  ||----W |
                  ||     || @@@ 
\n";
echo "\033[1;31mmultiplication \033[1;37m-\033[1;31m> \033[1;37m";
$xnumber=trim(fgets($this->input));
if ($xnumber) {
echo sprintf("\033[1;37m%s\n     \033[1;31m number \033[1;37m: \033[1;31m %s \n%s\n",$this->textz,$xnumber,$this->textz);
for ($i=0;$i<13;$i++) {
echo sprintf("\033[1;37m  %s \033[1;31mx \033[1;37m%s \033[1;31m= \033[1;37m%s \n",$i,$xnumber,$xnumber*$i);
}
echo "\033[1;31m".$this->textz . "\n";
}
else {
echo "\033[1;37mDo you want to leave\033[1;31m? \n";
}

echo "\033[1;31mback\033[1;37m/\033[1;32mindex\033[1;37m/ \033[1;37m-\033[1;31m> \033[1;37m";
$back=trim(fgets($this->input));
if ($back === "back") {
$classx->multiplication("php://stdin","---------------------");
}

if ($back === "index") {
system("clear");
$classx->index(
"\033[1;30m---------------------",
"\033[1;31m[\033[1;37m02\033[1;31m] \033[1;37mmathematically",
"\033[1;31m[\033[1;37m01\033[1;31m] \033[1;37mnumber tool",
"\033[1;31m[\033[1;37m00\033[1;31m] \033[1;37mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc",
"php://stdin");

}

else {
system("clear");
echo "\033[1;35m-__- \n \033[1;37m- -\n \033[1;32mthank you \033[1;37m^^ \n";
system ("exit");
}

}

function mathematically($input,$txt1,$txt2,$txt3,$txt4,$txt5,$txt6) {
system("clear");
$classx = new number();
$this->input = fopen ($input,"r");
$this->txt1 = $txt1;
$this->txt2 = $txt2;
$this->txt3 = $txt3;
$this->txt4 = $txt4;
$this->txt5 = $txt5;
$this->txt6 = $txt6;
echo sprintf("%s\n%s\n%s\n%s\n%s\n%s\n%s\n",
$this->txt1,
$this->txt2,
$this->txt3,
$this->txt4,
$this->txt5,
$this->txt6,
$this->txt1);
echo "\033[1;31m(\033[1;37mnumber\033[1;31m)\033[1;37m~\033[1;32m> \033[1;37m";
$inumber=trim(fgets($this->input));

if ($inumber === "1") {
echo "\033[1;30m[\033[1;31m+\033[1;30m] \033[1;31mnumber1 \033[1;30m: \033[1;37m";
$numberrx=trim(fgets($this->input));
echo "\033[1;30m[\033[1;31m+\033[1;30m] \033[1;31mnumber2 \033[1;30m: \033[1;37m";
$numberrc=trim(fgets($this->input));
echo "\033[1;37m". $numberrx . " \033[1;31m+ \033[1;37m" . $numberrc . " \033[1;31m= \033[1;37m" . $numberrx+$numberrc . " \033[1;32m✓ \n";
echo "\033[1;31mback\033[1;30m/\033[1;37mindex\033[1;30m/ \033[1;37m-\033[1;31m: \033[1;37m";
$back=trim(fgets($this->input));
if ($back === "back") {
$classx->mathematically(
"php://stdin",
"\033[1;30m------------------",
"\033[1;30m[\033[1;31m1\033[1;30m] \033[1;31m+",
"\033[1;30m[\033[1;31m2\033[1;30m] \033[1;32m-",
"\033[1;30m[\033[1;31m3\033[1;30m] \033[1;33m×",
"\033[1;30m[\033[1;31m4\033[1;30m] \033[1;34m÷",
"\033[1;30m[\033[1;31m0\033[1;30m] \033[1;32mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc");
}
if ($back === "index") {
system("clear");
$classx->index(
"\033[1;30m---------------------",
"\033[1;31m[\033[1;37m02\033[1;31m] \033[1;37mmathematically",
"\033[1;31m[\033[1;37m01\033[1;31m] \033[1;37mnumber tool",
"\033[1;31m[\033[1;37m00\033[1;31m] \033[1;37mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc",
"php://stdin");
}
else {
system ("exit");
}
} //if 1





if ($inumber === "2") {
echo "\033[1;30m[\033[1;31m-\033[1;30m] \033[1;31mnumber1 \033[1;30m: \033[1;37m";
$numberrx=trim(fgets($this->input));
echo "\033[1;30m[\033[1;31m-\033[1;30m] \033[1;31mnumber2 \033[1;30m: \033[1;37m";
$numberrc=trim(fgets($this->input));
echo "\033[1;37m". $numberrx . " \033[1;31m- \033[1;37m" . $numberrc . " \033[1;31m= \033[1;37m" . $numberrx-$numberrc . " \033[1;32m✓ \n";
echo "\033[1;31mback\033[1;30m/\033[1;37mindex\033[1;30m/ \033[1;37m-\033[1;31m: \033[1;37m";
$back=trim(fgets($this->input));
if ($back === "back") {
$classx->mathematically(
"php://stdin",
"\033[1;30m------------------",
"\033[1;30m[\033[1;31m1\033[1;30m] \033[1;31m+",
"\033[1;30m[\033[1;31m2\033[1;30m] \033[1;32m-",
"\033[1;30m[\033[1;31m3\033[1;30m] \033[1;33m×",
"\033[1;30m[\033[1;31m4\033[1;30m] \033[1;34m÷",
"\033[1;30m[\033[1;31m0\033[1;30m] \033[1;32mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc");
}
if ($back === "index") {
system("clear");
$classx->index(
"\033[1;30m---------------------",
"\033[1;31m[\033[1;37m02\033[1;31m] \033[1;37mmathematically",
"\033[1;31m[\033[1;37m01\033[1;31m] \033[1;37mnumber tool",
"\033[1;31m[\033[1;37m00\033[1;31m] \033[1;37mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc",
"php://stdin");
}
else {
system ("exit");
}
} //if 2



if ($inumber === "3") {
echo "\033[1;30m[\033[1;31m×\033[1;30m] \033[1;31mnumber1 \033[1;30m: \033[1;37m";
$numberrx=trim(fgets($this->input));
echo "\033[1;30m[\033[1;31m×\033[1;30m] \033[1;31mnumber2 \033[1;30m: \033[1;37m";
$numberrc=trim(fgets($this->input));
echo "\033[1;37m". $numberrx . " \033[1;31m× \033[1;37m" . $numberrc . " \033[1;31m= \033[1;37m" . $numberrx*$numberrc . " \033[1;32m✓ \n";
echo "\033[1;31mback\033[1;30m/\033[1;37mindex\033[1;30m/ \033[1;37m-\033[1;31m: \033[1;37m";
$back=trim(fgets($this->input));
if ($back === "back") {
$classx->mathematically(
"php://stdin",
"\033[1;30m------------------",
"\033[1;30m[\033[1;31m1\033[1;30m] \033[1;31m+",
"\033[1;30m[\033[1;31m2\033[1;30m] \033[1;32m-",
"\033[1;30m[\033[1;31m3\033[1;30m] \033[1;33m×",
"\033[1;30m[\033[1;31m4\033[1;30m] \033[1;34m÷",
"\033[1;30m[\033[1;31m0\033[1;30m] \033[1;32mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc");
}
if ($back === "index") {
system("clear");
$classx->index(
"\033[1;30m---------------------",
"\033[1;31m[\033[1;37m02\033[1;31m] \033[1;37mmathematically",
"\033[1;31m[\033[1;37m01\033[1;31m] \033[1;37mnumber tool",
"\033[1;31m[\033[1;37m00\033[1;31m] \033[1;37mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc",
"php://stdin");
}
else {
system ("exit");
}
} //if 3



if ($inumber === "4") {
echo "\033[1;30m[\033[1;31m÷\033[1;30m] \033[1;31mnumber1 \033[1;30m: \033[1;37m";
$numberrx=trim(fgets($this->input));
echo "\033[1;30m[\033[1;31m÷\033[1;30m] \033[1;31mnumber2 \033[1;30m: \033[1;37m";
$numberrc=trim(fgets($this->input));
echo "\033[1;37m". $numberrx . " \033[1;31m÷ \033[1;37m" . $numberrc . " \033[1;31m= \033[1;37m" . $numberrx/$numberrc . " \033[1;32m✓ \n";
echo "\033[1;31mback\033[1;30m/\033[1;37mindex\033[1;30m/ \033[1;37m-\033[1;31m: \033[1;37m";
$back=trim(fgets($this->input));
if ($back === "back") {
$classx->mathematically(
"php://stdin",
"\033[1;30m------------------",
"\033[1;30m[\033[1;31m1\033[1;30m] \033[1;31m+",
"\033[1;30m[\033[1;31m2\033[1;30m] \033[1;32m-",
"\033[1;30m[\033[1;31m3\033[1;30m] \033[1;33m×",
"\033[1;30m[\033[1;31m4\033[1;30m] \033[1;34m÷",
"\033[1;30m[\033[1;31m0\033[1;30m] \033[1;32mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc");
}
if ($back === "index") {
system("clear");
$classx->index(
"\033[1;30m---------------------",
"\033[1;31m[\033[1;37m02\033[1;31m] \033[1;37mmathematically",
"\033[1;31m[\033[1;37m01\033[1;31m] \033[1;37mnumber tool",
"\033[1;31m[\033[1;37m00\033[1;31m] \033[1;37mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc",
"php://stdin");
}
else {
system ("exit");
}
} //if 4



if ($inumber === "0") {
system ("exit");
}

else {
echo "\033[1;31mback\033[1;30m/\033[1;37mindex\033[1;30m/ \033[1;37m-\033[1;31m: \033[1;37m";
$back=trim(fgets($this->input));
if ($back === "back") {
$classx->mathematically(
"php://stdin",
"\033[1;30m------------------",
"\033[1;30m[\033[1;31m1\033[1;30m] \033[1;31m+",
"\033[1;30m[\033[1;31m2\033[1;30m] \033[1;32m-",
"\033[1;30m[\033[1;31m3\033[1;30m] \033[1;33m×",
"\033[1;30m[\033[1;31m4\033[1;30m] \033[1;34m÷",
"\033[1;30m[\033[1;31m0\033[1;30m] \033[1;32mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc");
}
if ($back === "index") {
system("clear");
$classx->index(
"\033[1;30m---------------------",
"\033[1;31m[\033[1;37m02\033[1;31m] \033[1;37mmathematically",
"\033[1;31m[\033[1;37m01\033[1;31m] \033[1;37mnumber tool",
"\033[1;31m[\033[1;37m00\033[1;31m] \033[1;37mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc",
"php://stdin");
}
else {
system ("exit");

}
}
}

function index($text,$tool2,$tool1,$exit,$input){
//#####################//
$this->text = $text;
$this->tool1 = $tool1;
$this->tool2 = $tool2;
$this->exit = $exit;
$this->input = $input;
$classx = new number();
$this->input = fopen ($input,"r");
//####################//
echo sprintf("\033[1;31m~\033[1;37m[\033[1;37mtool\033[1;31m-\033[1;37mnumber\033[1;37m]\033[1;31m>\n%s\n%s\n%s\n%s\n%s\n",
$this->text,
$this->tool1,
$this->tool2,
$this->exit,
$this->text);
echo "\033[1;31m[\033[1;37mnumber\033[1;31m]\033[1;31m=\033[1;32m~\033[1;31m> \033[1;37m";
$number=trim(fgets($this->input));
if ($number === "01") {
$classx->multiplication("php://stdin","---------------------");
}

if ($number === "02") {
$classx->mathematically(
"php://stdin",
"\033[1;30m------------------",
"\033[1;30m[\033[1;31m1\033[1;30m] \033[1;31m+",
"\033[1;30m[\033[1;31m2\033[1;30m] \033[1;32m-",
"\033[1;30m[\033[1;31m3\033[1;30m] \033[1;33m×",
"\033[1;30m[\033[1;31m4\033[1;30m] \033[1;34m÷",
"\033[1;30m[\033[1;31m0\033[1;30m] \033[1;32mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc");

}

if ($number === "00") {
system("clear");
echo "\033[1;35m-__- \n \033[1;37m- -\n \033[1;32mthank you \033[1;37m^^ \n";
system ("exit");
}

else {
system("clear");
$classx->index(
"\033[1;30m---------------------",
"\033[1;31m[\033[1;37m02\033[1;31m] \033[1;37mmathematically",
"\033[1;31m[\033[1;37m01\033[1;31m] \033[1;37mnumber tool",
"\033[1;31m[\033[1;37m00\033[1;31m] \033[1;37mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc",
"php://stdin"
);
}

}



}

$classx = new number();
$classx->index(
"\033[1;30m---------------------",
"\033[1;31m[\033[1;37m02\033[1;31m] \033[1;37mmathematically",
"\033[1;31m[\033[1;37m01\033[1;31m] \033[1;37mnumber tool",
"\033[1;31m[\033[1;37m00\033[1;31m] \033[1;37mexit\033[1;31m,\033[1;37mctrl\033[1;31m+\033[1;37mc",
"php://stdin"
);
?>
