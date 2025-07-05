<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XD</title>
</head>
<body>
  <label for="filtros">Categoria</label>
  <select [(ngModel)]="model" id="filtros">
    <option *ngFor="let item of list" [value]="item">{{item}}</option>
  </select>
</body>
</html>