<div class="w-full min-h-screen container px-5">
  <section class="w-full flex justify-around gap-10">
    <div class="py-4 w-1/3">
      <h1 class="text-2xl text-center font-bold">Top Items</h1>

      <div>A</div>
      <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 my-3">
        <div class="flex flex-col justify-center overflow-hidden bg-blue-500 text-xs text-white text-center"
          role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
      </div>
      <div>A</div>
      <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 my-3">
        <div class="flex flex-col justify-center overflow-hidden bg-blue-500 text-xs text-white text-center"
          role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
      </div>
      <div>A</div>
      <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 my-3">
        <div class="flex flex-col justify-center overflow-hidden bg-blue-500 text-xs text-white text-center"
          role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
      </div>
    </div>
    <div class="py-4 w-1/3">
      <h1 class="text-2xl text-center font-bold">Top Categories</h1>
      <div>A</div>
      <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 my-3">
        <div class="flex flex-col justify-center overflow-hidden bg-blue-500 text-xs text-white text-center"
          role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
      </div>
      <div>A</div>
      <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 my-3">
        <div class="flex flex-col justify-center overflow-hidden bg-blue-500 text-xs text-white text-center"
          role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
      </div>
      <div>A</div>
      <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 my-3">
        <div class="flex flex-col justify-center overflow-hidden bg-blue-500 text-xs text-white text-center"
          role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
      </div>
    </div>
  </section>
  <section class="container mt-10">
    <h1 class="text-2xl text-center font-bold">Monthly Summary</h1>
    <canvas id="monthlySummary"></canvas>
  </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  let rawData = {!! json_encode($shoppingLists) !!};
  let data = {};

  rawData.forEach(function(item) {
    let month = item.created_at.substr(0, 7);
    if (data.hasOwnProperty(month)) {
      data[month] += item.pieces;
    } else {
      data[month] = item.pieces;
    }
  });

  let sortedData = {};
  Object.keys(data).sort().forEach(function(key) {
    sortedData[key] = data[key];
  });

  //console.log(sortedData);
  const ctx = document.getElementById('monthlySummary');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: Object.keys(sortedData),
      datasets: [{
        data: Object.values(sortedData),
        borderWidth: 2,
        label: '# of Items'
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

</script>