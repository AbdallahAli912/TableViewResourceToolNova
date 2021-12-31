<template>
    <div style="overflow-x:auto;" v-if="true">
        <div class="flex items-center mb-3">
          <h1 class="flex-auto truncate text-90 font-normal text-2xl">
            {{this.panel.fields[0].title}}
          </h1>
        </div>
        <table class="customTableView">
            <thead>
            <tr>
                <th v-for="(field, index) in this.panel.fields[0].titles">{{ field }}</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(field, index) in this.panel.fields[0].rowsValues">
                <td v-for="(fieldtext, index) in field">{{ fieldtext }}</td>
            </tr>
            </tbody>

        </table>
    </div>

</template>

<script>
export default {
  props: ['resourceName', 'resourceId', 'panel','field'],

  mounted() {
    //
  },
}
</script>

<style lang="scss">

.customTableView {
    background-color: white;
    border: 1px solid #000;
    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
}


</style>
