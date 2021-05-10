<?php 
include "header.php";
$meses = array(
    '1' => 'Janeiro',
    '2' => 'Fevereiro',
    '3' => 'Março',
    '4' => 'Abril',
    '5' => 'Maio',
    '6' => 'Junho',
    '7' => 'Julho',
    '8' => 'Agosto',
    '9' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro'
 );
?>

<div class="col main pt-5 mt-3">
            <h1 class="display-4 d-none d-sm-block">
            Dados Conta
            </h1>
            <p class="lead d-none d-sm-block">Historico</p>

           
            <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 py-2" onclick="abrirConta('opa')">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body bg-warning">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Cartão</h6>
                            <h1 class="display-4">R$ 134</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2" onclick="abrirConta('opa')">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Cartão 2</h6>
                            <h1 class="display-4">R$ 87</h1>
                        </div>
                    </div>
                </div>
               
                <div class="col-xl-3 col-sm-6 py-2" onclick="abrirConta('opa')">
                    <div class="card text-white bg-success h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Cartão 3</h6>
                            <h1 class="display-4">R$ 36</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

            

           
           <!-- col-lg-9 col-md-8 -->
                
            </div>
            <!--/row-->
    
            </div><!--/row-->

        </div>
        <!--/main col-->
    </div>

</div>
<!--/.container-->

<div class="modal" tabindex="-1" id="Modal" role="dialog">
  <div class="modal-dialog" style="max-width: 70%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="conteudo"></div>
      <!-- <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" onclick="fecharmodal()">Close</button>
      </div> -->
    </div>
  </div>
</div>

<?php 
include "footer.php";
?>


<script>

var mese= {
    '1' : 'Janeiro',
    '2': 'Fevereiro',
    '3' : 'Março',
    '4' : 'Abril',
    '5' : 'Maio',
    '6' : 'Junho',
    '7' : 'Julho',
    '8' : 'Agosto',
    '9' : 'Setembro',
    '10' : 'Outubro',
    '11' : 'Novembro',
    '12' : 'Dezembro'}

function dataAtualFormatada() {

    var data = new Date(),
        dia = data.getDate().toString(),
        diaF = (dia.length == 1) ? '0' + dia : dia,
        mes = (data.getMonth() + 1).toString(), //+1 pois no getMonth Janeiro começa com zero.
        mesF = (mes.length == 1) ? '0' + mes : mes,
        anoF = data.getFullYear();
    return anoF + "-" + mesF + "-" + diaF;
}
 
    

    function addConta(mes)
    {
        html='<div class="modal-body">'; 

        html+='<div class="row">';
        html+='<div class="col">';
            html+='<label for="">Banco <input type="text" id="descricao" class="form-control"></label> ';
        html+='</div>';

          html+='<input type="hidden" id="mes" value="'+mes+'" class="form-control">';
                

         html+='<div class="col">';
            html+='<label for="">Dia <input type="hidden" id="data" value="'+dataAtualFormatada()+'" class="form-control"> <input type="number" id="dia" min="1" max="31" class="form-control"></label> ';
        html+='</div>'; 

        html+='<div class="col">';
            html+='<label for="">Valor <input type="number" id="valor" step="0.01" class="form-control"></label> ';
        html+='</div>';

        html+='<div class="col-sm-6">';
            html+='<label class="col-sm-12" for="">Descrição <input type="text" id="descricao" class="form-control"></label> ';
        html+='</div>';         

        html+='</div>';       
        html+='</div><div class="modal-footer">';
        html+='<button type="button" class="btn btn-primary">Salvar</button>';
        html+='<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>';
        html+=' </div>';

        $('.modal-title').text("Adicionar Cartão")
        $('#conteudo').html(html);
        $('#Modal').modal({
            keyboard: false,
            show:true
        });
       
    }
function abrirConta(mes){
    // $('#Modal').modal('dispose');
    addConta(mes);
    // $('#Modal').modal({
    //         keyboard: false,
    //         show:true
    //     });
    
}


</script>