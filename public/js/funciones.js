function gestion(){
    $.ajax({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        url:'/search',
        method:'GET',
        success: function(respuesta){
            $('#valores').html(
                `<input type="hidden" id="id_Interes" value="${respuesta[0]['interes']}">
                <input type="hidden" id="id_Gestion" value="${respuesta[0]['gestion_credito']}">
                <input type="hidden" id="id_Seguro" value="${respuesta[0]['seguro_bancario']}">
            `);
        }
    });
}
