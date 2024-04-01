
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>sample</title>
<style>
table td {
    padding: 30px;
}
.hidden {
    display: none;
}
</style>
</head>
<body>

<form action="sample-jump.php" id="form" method="post" onsubmit="return take()">
<table border="1">
    <tr>
        <td>
            <select name="cows" id="cows" class="kind" >
                <option value="non">-</option>
                <option value="mom">A</option>
            </select>
            <!-- <img src="" alt="" class="hidden_img"> -->
            <p class="hidden"><label><input type="radio" name="num" value="1">1</label>
                <label><input type="radio" name="num" value="2">2</label><label><input type="radio" name="num" value="3">3</label>
                <label><input type="radio" name="num" value="4">4</label><label><input type="radio" name="num" value="5">5</label>
                <label><input type="radio" name="num"  value="6">6</label></p>
            <br>
            <select name="cows2" id="cows2" class="kind" >
                <option value="non">-</option>
                <option value="fam">Aa</option>
            </select>
            <!-- <img src="" alt="" class="hidden_img"> -->
            <p class="hidden"><label><input type="radio" name="num2"  value="1">1</label>
                <label><input type="radio" name="num2" value="2">2</label><label><input type="radio" name="num2" value="3">3</label>
                <label><input type="radio" name="num2" value="4">4</label></p>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>
</br>
<input type="hidden" name="total" id="total">
<input type="hidden" name="total2" id="total2">
<input type="hidden" name="type" id="type">
<input type="hidden" name="type2" id="type2">
<input type="submit" value="CHECK">
</form>
</body>
<script src="../../_common/scripts/jquery-3.4.1.min.js"></script>
<script>
    'use strict';

    $(document).ready(function(){
        $('.kind').change(function(){
            // console.log('AAA')
            $(this).next().toggleClass('hidden');
        });
    });

    function cal() {
        const numbtn = document.querySelector('input[name="num"]:checked').value;
        // console.log(numbtn);

        const numbtn2 = document.querySelector('input[name="num2"]:checked').value;
        // console.log(numbtn2);
        
        return {numbtn, numbtn2};

    }

    function selectChange(numbtn, numbtn2) {
        const value = document.getElementById('cows').value;
        const value2 = document.getElementById('cows2').value;

        document.getElementById('type').value = value;
        document.getElementById('type2').value = value2;
        // console.log(document.getElementById('type').value);
        // console.log(value);
        // console.log(value2);

        const total = value + cal().numbtn + '頭';
        const total2 = value2 + cal().numbtn2 + '頭';

        // console.log(total);
        // console.log(total2);

    }

    function take() {
        const { numbtn, numbtn2 } = cal();
        
        document.getElementById('total').value = numbtn;
        document.getElementById('total2').value = numbtn2;

        selectChange(numbtn, numbtn2);
        return true;
    }

</script>
</html>