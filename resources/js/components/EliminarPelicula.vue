<template>
  <input
    type="submit"
    class="btn btn-danger d-block w-100 mb-1"
    value="Eliminar"
    v-on:click="eliminarPelicula"
  />
</template>
<script>
export default {
  props: ["peliculaId"],
  methods: {
    eliminarPelicula() {
      this.$swal({
        title: "¿Desea eliminar la pelicula?",
        text: "Una vez eliminada no se puede recuperar!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si",
        cancelButtonText: "No",
      }).then((result) => {
        if (result.isConfirmed) {
          const params = {
            id: this.peliculaId,
          };
          axios
            .post(`/peliculas/${this.peliculaId}`, { params, _method: "delete" })
            .then((respuesta) => {
              this.$swal({
                title: "Pelicula Eliminada!",
                text: "Se ha eliminado la Pelicula.",
                icon: "success",
              });
              //Eliminar de la lista
              this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
            });
        }
      });
    },
  },
};
</script>
