<template>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">My Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-column">
          <li class="nav-item">
            <router-link to="/" class="nav-link">Home</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/about" class="nav-link">About</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/contact" class="nav-link">Contact</router-link>
          </li>
        </ul>
      </div>
    </nav>
  </template>
<style>
.navbar {
  height: 50vh;
}

.nav-link {
  color: white;
  padding: 10px;
}

.nav-link:hover {
  background-color: #343a40;
}
</style>

  