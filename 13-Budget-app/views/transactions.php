<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <html>
      <table>
      <thead>
      <tr>
        <th>Date</th>
        <th>Check #</th>
        <th>Description</th>
        <th>Amount</th>
      </tr>
      </thead>
      <tbody>
        <?php if (! empty($transactions)): ?>
          <?php foreach($transactions as $transaction): ?>

            <tr>
              <td><?= formatDate($transaction['date']) ?></td>
              <td><?= $transaction['checkNumber'] ?></td>
              <td><?= $transaction['description'] ?></td>
              <td>
                <span style="color: <?= $transaction['amount'] > 0 ? 'green' : 'red' ?>;">
                  <?= formatPoundAmount($transaction['amount']) ?>
                </span>
              </td>
            </tr>

            <?php endforeach ?>
        <?php endif ?>
      </tbody>
      <tfoot>
      <tr>
        <th colspan="3">Total Income:</th>
        <td><?= formatPoundAmount($totals['totalIncome'] ?? 0) ?></td>
      </tr>
      <tr>
        <th colspan="3">Total Expense:</th>
        <td><?= formatPoundAmount($totals['totalExpense'] ?? 0) ?></td>

      </tr>
      <tr>
        <th colspan="3">Net Total:</th>
        <td><?= formatPoundAmount($totals['netTotal'] ?? 0) ?></td>
      </tr>
      </tfoot>
      </table>
    </html>
  </body>
</html>
