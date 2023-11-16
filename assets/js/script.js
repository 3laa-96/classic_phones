//Global scope
var input = document.getElementById("result");
var output = document.getElementById("output");
var txt="";
var timer;
var value=0;


function doEvent(){
    // var val = parseInt(input.value);
    // if(val == 100){
    //     output.innerHTML = "FULL";
    // }else if(val==0){
    //     output.innerHTML = "TOTALY EMPTY";
    // }else if(val>=0 && val<20){
    //     output.innerHTML = "ALMOST EMPTY";
    // }else if(val >=20 && val <70){
    //     output.innerHTML = "GOOD";
    // }else if(val >=70 && val < 100){
    //     output.innerHTML = "ALMOST FULL";
    // }else{
    //     output.innerHTML = "INVALID PERCENTAGE";
    // }

    // switch (val) {
    //     case 100:
    //         output.innerHTML = "FULL";
    //         break;
    //     case 0:
    //         output.innerHTML = "EMPTY";
    //         break;
    //     case 50:
    //         output.innerHTML = "half";
    //         break;
    //     default:
    //         output.innerHTML = "UNKNOWN";
    //         break;
    // }

    var arr = [1,4,-6,89,34,2,0,3];
    var i=0;
    // for(i=0;i<arr.length;i++){
    //     if(arr[i]==0){
    //         break;
    //     }
    //     if(arr[i]>10){
    //         continue;
    //     }
    //     output.innerHTML +=`${arr[i]}(${i}),`;
    // }
    var arr1 = [
        {name:"student1", age:18}, //arr1[0]
        {name:"student2", age:22}, //arr1[1]
        {name:"student3", age:26},
        {name:"student4","firstName":"me"}
    ]
    var totalAge = 0;
    var cnt = 0;
    var txt = "";
    for(var obj of arr1){
        for(key in obj){
            if(key == "age"){
                totalAge += obj.age;
                cnt++;
            }
        }   
    }
    output.innerHTML =" Average is: " + (totalAge/cnt);
    
    // i=0;
    // while(i<arr.length){
    //     if(arr[i]==0){
    //         break;
    //     }
    //     if(arr[i]>10){
    //         i++;
    //         continue;
    //     }
    //     output.innerHTML +=`${arr[i]}(${i}),`;
    //     i++;
    //     alert(i);
    // }

    // // i=0;
    // do{
    //     if(arr[i]==0){
    //         output.innerHTML += " ZERO";
    //         i++;
    //         continue;
    //     }
    //     if(arr[i]>10){
    //         i++;
    //         continue;
    //     }
    //     output.innerHTML +=`${arr[i]}(${i}),`;
    //     i++;
    //     alert(i);

    // }while(i<arr.length);

    //....
    // alert(i);
}



function resetMe(){
    value=0;
    // window.clearInterval(timer);
    stopMe();
}
function clickMe(){
    // output.innerHTML = Math.ceil((input.value/1000))*1000;

    // timer = window.setInterval(function(){
    //     output.innerHTML = value++;
    // },200);
    // var dt = new Date();
    // if(dt.getHours()>12){
    //     output.innerHTML = "PM";
    // }else{
    //     output.innerHTML = "AM";
    // }
    // output.innerHTML = `current year: ${dt.getFullYear()} ....`;
    // alert("here");
    // window.history.go(-2);
    //alert(window.location.protocol);
    //input.value = addNumbers(10,20);
    // var arr = [1,4,5,78,9,3];
    // var newArr = arr.map(doMap);
    
    // console.log(arr);
    // arr.splice(1,2,[33,44,55]);
    // console.log(arr.sort((p1,p2)=>{
    //     if(parseInt(p1) > parseInt(p2)) return -1;
    // }).reverse());

    // var newArr = arr.forEach(add3)
    // var newArr = arr.filter(filterArr);
    // var newVal = arr.reduce(reduceArr);
    // var myBoolean = arr.every(checkif10);
    // var myBoolean = arr.some(checkifOneAtLeast1);
    // console.log(myBoolean);
    //  output.innerHTML = myBoolean.toString();

    timer = window.setInterval(function(){
        var currentDate = new Date();
        var rnd;
        // output.innerHTML = currentDate.toLocaleTimeString();

        rnd = Math.ceil(25 * Math.random());
        document.getElementById("div1").innerHTML = rnd;

        rnd = Math.ceil(20 * Math.random());
        document.getElementById("div2").innerHTML = rnd;

        rnd = Math.ceil(10 * Math.random());
        document.getElementById("div3").innerHTML = rnd;
    },500);
    
}
function stopMe(){
    window.clearInterval(timer);
}

function add3(value,index,array){
    txt += (value+3)+",";
}
function doMap(value,index,array){
    return `${value}(${index})`;
}
function filterArr(value,index,array){
    return value >=5;
}
function reduceArr(total, value,index,array){
    if(value >= 5)
        return total + value;
    else
        return total;
}
function checkif10(vle,index,array){
    return vle < 100;
}

function checkifOneAtLeast1(vle,index,array){
    return vle == 2;
}


function informMe(firstName, lastName){
    alert(firstName + ' ' + lastName);
}

var addNumbers = (num1,num2)=>{ return (num1 + num2);}


function ArrManagement(arr){
    arr[2]="string";
    var arr1 = [1,3];
    // arr.push("new value");
    // var newString = arr.join('/');
    console.log(arr);
    var newArr = arr.splice(1,0,[33,44,55]);
    console.log(newArr);
    return newArr;
}

function getNumberResult(nbr){
    var realNbr =  parseFloat(nbr);
    var addNbr = 123;
    return realNbr.toString() + addNbr ;
}


function getInfo(str){
    return ("length: " + str.length +
            "<br>Trimmed: " + str.trim() +
            "<br>pad30: " + str.padStart(30,'*') +
            "<br>indexOf:" + str.indexOf('i') +
            "<br>lastIndexOf:" + str.lastIndexOf('i') +
            "<br>split:" + str.split(' ') +   // ['this','is','a','string']
            "<br>Upper:" + str.toUpperCase() +
            "<br>Index at 3:" + str.charAt(3) + 
            "<br>is start with a:" + str.startsWith('a')
            );
}

window.setInterval(function(){
    var currentDate = new Date(); //current date
   // var dt = new Date(1980,4,5);
   var dv = document.getElementById("datetime");
   dv.innerHTML = currentDate.toLocaleTimeString(); //dt.getDay(); // 0 - 6
},1000);

num1 = document.getElementById("num1");
num2 = document.getElementById("num2");
outputMath = document.getElementById("mathOutput");

function calculate(){
    try {
        if(!num1 || !num2){
            throw "invalid controls";
        }
        if(num1.value=="" || num2.value==""){
            throw "Enter all values";
        }
        if(isNaN(num1.value) || isNaN(num2.value)){
            throw  "Enter Only numbers";
        }
        if(num2.value==0){
            throw "divider cannot be zero";
        }

        val1 = parseInt(num1.value);
        val2 = parseInt(num2.value);
        console.warn(typeof(val1), typeof(val2), val1+val2);
        console.info(typeof(val1), typeof(val2), val1+val2);
        console.error(typeof(val1), typeof(val2), val1+val2);
        outputMath.innerHTML = `sum is:${(val1 + val2)} 
        <br>multiplication: ${val1 * val2}
        <br>division: ${val1 / val2}`;                    
    } 
    catch (error){
        alert(error);
    }
    finally{
        alert(`num1 is: ${parseInt(num1.value)} and num2 is: ${parseInt(num2.value)}`);
    }
    ///
}

function add(num1, num2){
    
    return parseFloat(num1)+ parseFloat(num2);
}

function borrowBook(){
    if(window.confirm("Are you sure you want to borrwo a book?")){
        val = window.prompt("what is the ISBN #:");
        output.innerHTML = val;
    }
}