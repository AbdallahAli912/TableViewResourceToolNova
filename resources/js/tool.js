import Tool from './components/Tool'

Nova.booting((app, store) => {
  app.component('payroll-table-view', Tool)
})
