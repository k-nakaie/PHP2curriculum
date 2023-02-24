console.log("test");

let sen = document.getElementById('send');
console.log(sen.value);
// let kana = document.getElementById('kana');
// let tel = document.getElementById('tel');
// let prefectures = document.getElementById('prefectures');
// let city = document.getElementById('city');
// let town = document.getElementById('town');
// let apart = document.getElementById('apart');
// let time = document.getElementsById('time').values;


// function check(){


//     let namae = document.getElementById('namae');
//     let kana = document.getElementById('kana');
//     let tel = document.getElementById('tel');
//     let prefectures = document.getElementById('prefectures');
//     let city = document.getElementById('city');
//     let town = document.getElementById('town');
//     let apart = document.getElementById('apart');
//     console.log(namae.Value);
//     console.log(kana.Value);
//     console.log(tel.Value);
//     console.log(prefectures.Value);
//     console.log(town.Value);
//     console.log(apart.Value);
//     console.log(time.Value);
//     console.log(city.Value);


//     if(namae.Value == ""){
//             alert("申込者氏名を入力して下さい");
//             return false;
//         }else if(kana.Value == ""){
//             alert("フリガナを入力して下さい");
//             return false;
//         }else if(tel.Value == ""){
//             alert("電話番号を入力して下さい");
//             return false;
//         }else if((prefectures.Value == "") ||(city.Value == "") ||(town.Value == "") ){
//             alert("住所の入力内容に不備があります");
//             return false;
//         }else if(time.Value == ""){
//             alert("期間を選択して下さい");
//             return false;
//         }else{
//             return true;
//         }
//     }

    // (namae.Value !== "") && (kana.Value != "")&&(tel.Value != "")
    // ((prefectures.Value != "") &&(city.Value != "") &&(town.Value != "") )&&(time.Value != "")


document.getElementById('send').addEventListener('click', function(e){
    let namae = document.getElementById('namae');
    let kana = document.getElementById('kana');
    let tel = document.getElementById('tel');
    let prefectures = document.getElementById('prefectures');
    let city = document.getElementById('city');
    let town = document.getElementById('town');
    let apart = document.getElementById('apart');
    let time = document.getElementById('time');
    console.log(namae.value);
    console.log(kana.value);
    console.log(tel.value);
    console.log(prefectures.value);
    console.log(town.value);
    console.log(apart.value);
    console.log(time.value);
    console.log(city.value);

    if(namae.value == ""){
            alert("申込者氏名を入力して下さい");
            e.preventDefault();
            return false;
        }else if(kana.value == ""){
            alert("フリガナを入力して下さい");
            e.preventDefault();
            return false;
        }else if(tel.value == ""){
            alert("電話番号を入力して下さい");
            e.preventDefault();
            return false;
        }else if((prefectures.value == "") ||(city.value == "") ||(town.value == "") ){
            alert("住所の入力内容に不備があります");
            e.preventDefault();
            return false;
        }else if(time.value == "0"){
            alert("期間を選択して下さい");
            e.preventDefault();
            return false;
        }else{
            return true;
        }
    }


)

