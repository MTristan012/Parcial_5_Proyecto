<div class="w-full min-h-screen container mx-5">
  <section class="w-full flex justify-between h-50">
    <div>
      <h1 class="text-2xl text-center font-bold">Top Items</h1>
    </div>
    <div>
      <h1 class="text-2xl text-center font-bold">Top Categories</h1>
    </div>
  </section>
  <section class="container h-50">
    <h1 class="text-2xl text-center font-bold">Monthly Summary</h1>
    <canvas id="myChart"></canvas>
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
  const ctx = document.getElementById('myChart');
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