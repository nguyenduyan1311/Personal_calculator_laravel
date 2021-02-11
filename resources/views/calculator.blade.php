<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        border: 1px solid;
        border-collapse: collapse;
    }
    td, th {
        width: 50px;
        height: 50px;
        margin: 10px;
    }
    button{
        width: 100%;
        height: 100%;
        display: block;
        font-size: 23px;
    }
    input{
        width: 97%;
        height: 70%;
        display: inline;
        text-align: right;
        font-size: 25px;
        color: #000000;
    }
</style>
<body>
<script>
    function inputStr(str) {
        let currentValue = document.getElementById('displayResult').value;
        let displayResult = document.getElementById('displayResult');
        let result = document.getElementById('result');
        if (str === 'CE'){
            displayResult.value = currentValue.slice(0, currentValue.length-1);
            result.value = currentValue.slice(0, currentValue.length-1);
        }else if (str === 'C'){
            displayResult.value = '';
            result.value = '';
        }else {
            let char = currentValue.slice(currentValue.length-1);
            if (char === '+' || char === '-' || char === '*' || char === '/'){
                if (str === '+' || str === '-' || str === '*' || str === '/'){
                    displayResult.value = currentValue.slice(0, currentValue.length-1) + str;
                    result.value = currentValue.slice(0, currentValue.length-1) + str;
                }else {
                    displayResult.value = currentValue + str;
                    result.value = currentValue + str;
                }
            }else {
                displayResult.value = currentValue + str;
                result.value = currentValue + str;
            }
        }
    }
</script>
<form action="" method="get">
    @csrf
    <table cellpadding="7px">
        <tr>
            <th colspan="5">
                <input type="text" id="displayResult" disabled placeholder="0" value="{{ $result ?? '' }}">
                <input type="hidden" name="calc" id="result" placeholder="0" value="{{ $result ?? '' }}">
            </th>
        </tr>
        <tr>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">7</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">8</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">9</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">/</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">CE</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">4</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">5</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">6</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">*</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">C</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">1</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">2</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">3</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">-</button>
            </td>
            <td rowspan="2">
                <button type="submit">=</button>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="button" onclick="inputStr(this.innerText)">0</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">.</button>
            </td>
            <td>
                <button type="button" onclick="inputStr(this.innerText)">+</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
