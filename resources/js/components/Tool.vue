<template>
    <div style="overflow-x:auto;" v-if="true">
        <h3>
            {{this.panel.fields[0].title}}
        </h3>
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
