// alert("scriptul a fost executat");
// console.log("prima linie a fost executat");
// console.log("a doua line a fost executat");
// console.warn("codul a fost executat");
// console.error("codul a foste executat");

//Acesta este un comment
/** Acesta este un comment */

// var, let, const
/** var, let, const **/ 

// console.log(myName);


// var myName;
// let secondName = Bogdan;
// const age = 30;

// {
//     var myName = "Bogdan";
// }

// myName = "Ovidiu";
// console.log(secondName);
// secondName = "Adrian";

// Tipuri de date: Primitive si obiecte
// Boolean
let boolean = true;
console.log(boolean);
console.log(typeof(boolean));

// Null
let n = null;
console.log(n);
console.log(typeof(n));

// Undfined
let undf = undefined;
console.log(undf);
console.log(typeof(undf));

// Number
let num = 123;
console.log(num);
console.log(typeof(num));

// String
let str = 'Acesta este un string';
console.log(str);
console.log(typeof(str));

// Object
let person1 = {
    age: 20,
    name: "Bogdan"
}

let person2 = {
    age: 20,
    name: "Mihai"
}

console.log(person1);
console.log(typeof(person1));

console.log(person2);
console.log(typeof(person2));

// Array
const hobbies = ["Reading", "Biking", "Swimming"];
const prices = [12.5, 13.3, 25.7, 30.1];  

console.log(hobbies);
console.log(typeof(hobbies));
console.log(prices);
console.log(typeof(prices));

// const biking = hobbies [2];
// console.log(biking);
// console.log(typeof(biking));
hobbies.filter;

const price = prices [3];
console.log(prices[2]);

// const persons = [person1, person2];
// const people = [{id: 1, age: 35, email: "person@email.com"},
//     {id: 2, age: 25, email: "anotherpersons@email.com"}];

// console.log(people);

// Operators

const name = "Mihai";
// Aritmetic +, -, /, *, ++, --,

const sum = 1 + 1; console.log(sum);
const difference = 2 - 1; console.log(difference);
const division = 10 / 5; console.log(division);
let multiplication = 10 * 5; console.log(multiplication);

multiplication++;

console.log(multiplication);

multiplication--

console.log(multiplication);

// Logic &&, ||, !

// && - si;
// || - ori;
// ! - negatia;

// Comparatie ==, !=, ===, >=, <=

const number1 = 12;
const number2 = 13;

console.log(number1 == number2);
console.log(number1 != number2);

const myNumber = "12";
console.log(number1 === myNumber);

console.log(number1 > number2);
console.log(number1 < number2);
console.log(number1 >= number2);
console.log(number1 <= number2);

// De atribuire =, +=, /=, *=, -=

const myName = "Bogdan";
let mySecondNumber = 20;
mySecondNumber += 5;
console.log("My Number: " + mySecondNumber);
mySecondNumber -= 5;
console.log("My Number: " + mySecondNumber);
mySecondNumber /= 5;
console.log("My Number: " + mySecondNumber);
mySecondNumber *= 5;
console.log("My Number: " + mySecondNumber);


const age = 15;

// conditii
// if/else
if(age < 18){
    console.log("You are under aged.");
} else {
    console.log("You are an adult.");
}

// for loop
const people = ["Bogdan", "Mihai", "Andreea", "Ovidiu"];

for(i=people.length - 1; i>=0; i--){
    console.log(people[i]);
}

// // while

let number = 1000;

// while(number <= 10){
//     console.log(number);
//     number++;
// }

// // do while

// do {
//     console.log(number);
//     number++;
// }while(number <= 10)

// switch
switch(number){
    case 1:
        console.log("Number este 1");
        break;
    case 2:
        console.log("Number este 2");
        break;
    default:
        console.log("Default este defapt: " + number);
}

// Catch Error
try{
    if(number === 1){
        console.log("Number are valoarea 1");
    }
}catch(error){
    console.log("Something happend: " + error.message);
}finally{
    console.log("Finally a fost executat.");
}

// Fuction
function displayMyName(myName, age, email){
    console.log("My name is: "+ myName);
    console.log("My age is: " + age);
    console.log("My email adress is: " + email);
}

function function1(anotherFunction){
    anotherFunction();
}

// function1(function(){
//     console.log("Functia a fost executata");
// })

displayMyName("Ovidiu");

// Funtion Array

function1(() => console.log("Funtia a fost executata"));

((myName) => {
    console.log(myName);
})();

// Class and objects

class Person{
    constructor(firstName, lastName, dateOfBirth){
        this.firstName = firstName;
        this.lastName = lastName;
        this.dateOfBirth = dateOfBirth;
    }
    calculateAge(){
        return new Date().getFullYear() - this.dateOfBirth.getFullYear();
    }
}

var p = new Person("Mihai", "Popescu", new Date("11-11-1985"));
console.log(p.calculateAge());