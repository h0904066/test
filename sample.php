
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>sample</title>
<style>
body {
    width: 950px;
}
table {
    width: 450px;
}
table td {
    padding: 30px;
}
.hidden {
    display: none;
}
select {
    width: 50px;
}
</style>
</head>
<body>

<form action="sample-jump.php" id="form" method="post" onsubmit="return take()">

<table border="1" id="cow-table">
    <tr>
        <td>
            <select name="cows" id="cows" class="kind" >
                <option value="non" >-</option>
                <option value="mom">A</option>
            </select>
            <!-- <img src="" alt="" class="hidden_img"> -->
            <p class="hidden">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <label><input type="radio" name="num" value="<?= $i ?>"><?= $i ?></label>
                <?php endfor; ?>
                </p>
            <br>
            <select name="cows2" id="cows2" class="kind" >
                <option value="non">-</option>
                <option value="fam">Aa</option>
            </select>
            <!-- <img src="" alt="" class="hidden_img"> -->
            <p class="hidden">
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <label><input type="radio" name="num2"  value="<?= $i ?>"><?= $i ?></label>
            <?php endfor; ?>
            </p>
        </td>
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
            $(this).next().toggleClass('hidden');
        });
    });

    function cal() {
        const numbtn = document.querySelector('input[name="num"]:checked').value;
        const numbtn2 = document.querySelector('input[name="num2"]:checked').value;        
        return {numbtn, numbtn2};

    }

    function selectChange(numbtn, numbtn2) {
        const value = document.getElementById('cows').value;
        const value2 = document.getElementById('cows2').value;

        document.getElementById('type').value = value;
        document.getElementById('type2').value = value2;

        const total = value + cal().numbtn + '頭';
        const total2 = value2 + cal().numbtn2 + '頭';
    }

    function take() {
        const { numbtn, numbtn2 } = cal();
        
        document.getElementById('total').value = numbtn;
        document.getElementById('total2').value = numbtn2;

        selectChange(numbtn, numbtn2);
        return true;
    }

    let table1 = document.getElementById('cow-table');
        for 

</script>
</html>