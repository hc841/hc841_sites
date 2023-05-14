var num = 0;
while(num<5){
    document.write(num+"");
    num++;
}

document.write("<br><br>--- FOR ----<br><br>");

for(var i = 0; i < 10; i++){
    document.write(i + " ");
}

for(var R = 0; R < 10; R--){
    document.write(R + " ");
}

document.write("<br><br>--- SWITCH ----<br><br>");

var X = 0;

switch(X){
    case 0 : document.write("0");
    break;
    case 1 : document.write("1");
    break;
    case 2 : document.write("2");
    break;
    case 3 : document.write("3");
    break;
    default: document.write("Digite apenas 0, 1, 2, 3. Animal!");
    break;
}
