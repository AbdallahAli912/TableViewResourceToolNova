<template>
  <div style="overflow-x:auto;" v-if="true">
    <div class="flex items-center mb-3">
      <h1 class="flex-auto truncate text-90 font-normal text-2xl">
        {{this.panel.fields[0].title}}
      </h1>
    </div>
    <table class="customTableView card mb-6 py-3 px-6" >
      <thead>
      <tr>
        <th v-for="(field, index) in this.panel.fields[0].titles">
          <h4 class="font-normal text-80">
            {{ field }}
          </h4>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="(field, index) in this.panel.fields[0].rowsValues">
        <td v-for="(fieldtext, index) in field">
          <p class="text-90 ">
            {{ fieldtext }}
          </p>
        </td>
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
  th, td {
    padding: 15px;
    text-align: left;
    border-bottom-width: 1px;
    border-color: #eef1f4;
  }
}


</style>
