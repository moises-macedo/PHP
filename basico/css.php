<div class="titulo">Integração Html</div>

<h1>
    <?php
    echo "Olá";
    echo "<small>";
    echo " Mundo!";
    echo "<small>";
    ?>
</h1>

<?= "<h3> Outra forma de 'exporessar' <h3>" ?>
<br>
<div>
    <button><?="Legal"?></button>
</div>

<style>
    button{
        padding: 5px;
        border-radius: 5px;
        background-color: #4286f4;
        font-weight: bold;
        border: none;
        cursor: pointer;
        
    }
    button:active{
        color: #fff;
    }

</style>