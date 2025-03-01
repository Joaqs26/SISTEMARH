<div class="row font-size-modulo">
    <div class="col-9">
        <div class="form-inline">
            <button onclick="mostrarRetardo()" type="button" class="btn btn-light" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus icono-pequeno-tabla"></i>
                <span class="hide-menu text-button-add">&nbsp;Agregar Retardo</span>
            </button>
        </div>
    </div>
    <div class="col-3 search-container">
        <input onkeyup="buscarRetardo();" id="buscar_retardo" type="text" placeholder="Buscar..."
            class="form-control mr-sm-2 search-input">
        <span class="search-icon"><i class="fas fa-search"></i></span>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12">
        <div class="col-12 table-responsive">
            <div class="text-center">
                <table class="table table-bordered table-fixed" id="tabla_retardo">
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="table-right">
            <button onclick="anteriorValor_re()" class="btn btn-light"><i class="fa fa-angle-double-left"></i>
                <span class="hide-menu" style="font-weight: bold;"></span>
            </button>
            <label id="idtable_re">1</label>
            <button onclick="siguienteValor_re()" class="btn btn-light"><i class="fa fa-angle-double-right"></i>
                <span class="hide-menu" style="font-weight: bold;"></span>
            </button>
        </div>
    </div>
</div>
 
<?php include 'Agregar.php' ?>