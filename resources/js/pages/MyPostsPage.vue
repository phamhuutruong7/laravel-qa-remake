<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="#">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Questions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Answers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <span class="post-badge accepted">A</span>
                                        <span class="ml-4 votes-count accepted">10</span>
                                    </div>
                                    <div class="col-md-9">Lorem ipsum dolor</div>
                                    <div class="col text-right">Jun 6'15</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <span class="post-badge accepted">Q</span>
                                        <span class="ml-4 votes-count accepted">14</span>
                                    </div>
                                    <div class="col-md-9">Lorem ipsum dolor</div>
                                    <div class="col text-right">Apr 6'15</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <span class="post-badge accepted">Q</span>
                                        <span class="ml-4 votes-count accepted">13</span>
                                    </div>
                                    <div class="col-md-9">Lorem ipsum dolor</div>
                                    <div class="col text-right">Mar 6'15</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style lang="scss" scoped>
    $color-green: rgba(95, 187, 126);
    .votes-count {
        border: 1px solid #ddd;
        display: inline-block;
        min-width: 40px;
        text-align: center;
        &.accepted {
            background: $color-green;
            border: 1px solid $color-green;
            color: #fff;
        }
    }

    .post-badge {
        border: 1px solid #ddd;
        display: inline-block;
        width: 25px;
        text-align: center;
        border-radius: 100%;
        &.accepted {
            border: 1px solid $color-green;
            color: $color-green;
        }
    }
</style>