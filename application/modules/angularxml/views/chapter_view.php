<div ng-controller="chapterCtrl">
  <h2>{{ chapterName }}</h2>
  <ul>
    <li ng-repeat="page in pages">{{ page.name }}</li>
  </ul>
</div>