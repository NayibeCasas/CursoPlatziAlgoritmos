//The second bigger number in the array 
// 22 de july de3 2021

function secondLargestnumber(numbers){
    let first=numbers[0];
    let second=0;
    for(let i=0;i<numbers.length;i++){
        if (numbers[i]>first){
            second=first;
            first=numbers[i];
        }
        if(numbers[i]>second && numbers[i]< first){
            second=numbers[i];
        }
    }
    return second;
}

let number=[8,4,6,10,9,11];
console.log(secondLargestnumber(number))