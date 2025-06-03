<template>
     <div>
        <div class="row">
                <div class=" col-lg-3 col-md-6 col-12 mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" v-model="cantidad">
                </div>

                <div class=" col-lg-3 col-md-6 col-12 mb-3">
                    <label for="subtotal" class="form-label">Subtotal</label>
                    <input type="text" class="form-control" id="subtotal" name="subtotal" v-model="subtotal">
                </div>
    

                <div class=" col-lg-3 col-md-6 col-12 mb-3">
                    <label for="cantidad" class="form-label">IVA</label>
                    <input type="text" class="form-control" id="iva" name="iva" v-model="iva">
                </div>

                <div class=" col-lg-3 col-md-6 col-12 mb-3">
                    <label for="cantidad" class="form-label">Total</label>
                    <input type="text" class="form-control" id="total" name="total" v-model="total">
                </div>
            </div>
     </div>
</template>

<script>
    export default {
       // mounted() {
            data(){
                return {
                    cantidad: 1,
                    subtotal: 0,
                    iva: 0, 
                    total: 0,
                }
            },
            created(){

                console.log('Component mounted.')
               
            },
            methods: {
                calculaIva: function(){
                    var operacion = this.cantidad * this.subtotal
                    if(this.cantidad > 0 && this.subtotal > 0 ){
                        this.iva = operacion * .16
                        this.total = operacion + this.iva
                    }
                }

            },
            watch:{
                subtotal: function() {
                    this.calculaIva()
                }
           // }
        }
    }
</script>
