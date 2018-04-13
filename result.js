//JS



// QUESTION: 1
// Напишите простую функцию, принимающую 2 целочисленных параметра.
// Результат функции: сумма двух параметров. Если параметр не числовой - считать за 0 число.

function summ(a,b){
    var first = isNaN(Number(a)) ? 0 : Number(a);
    var two = isNaN(Number(b)) ? 0 : Number(b);
    return first+two;
}

//alert(summ('12', '11'));

// QUESTION: 2
// Написать простой обьект, состоящий из 2 любых параметров и их значений.

var myObj = {
    'name':'Ivan',
    'list':[1,2,4]
};


// QUESTION: 3
// var arr = new Array( "apples", "bananas" ); Добавить 1 элемент массива

var arr = new Array( "apples", "bananas" );

//Variants add to array
arr.push('end');
arr.unshift('first');
arr[arr.length] = 1;
arr.firstname = 'Ivan';

//alert(arr.firstname);
//alert(arr);

// QUESTION: 4
//Навесить ивент на body на click.

window.onload = function(){
    var body = document.body;

    //Variant 1

    // body.onclick = function(){
    //     alert('123');
    // }
    //

    //Variant 2
    function myClick(){
        alert('click Body');
    }
    body.addEventListener('click', myClick);


}

//Variant 3
//Событие привязано в Html коде.. (index.html)
// function add(){
//     alert('click Body');
// }
//

// QUESTION: 5
// var obj = { a:12, b:56 };  Добавить в обьект новый пустой массив.


var obj = { a:12, b:56 };
obj.c = [];
