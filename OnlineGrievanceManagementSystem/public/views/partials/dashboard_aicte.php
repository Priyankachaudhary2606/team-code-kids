
<head>
    <title></title>

</head>

<div class="container dashboard">

    <div class="row row_gap">
        <div class="col-md-3 grievance-box">
            <div class="grievance grievance-total">
                <span class="grievance-stat-value">{{total}}</span>
                 <hr>   
                <span class="grievance-stat-name">Total Grievances </span>
            </div>
        </div>

        <div class="col-md-3 grievance-box">
            <div class="grievance grievance-pending">
                <span class="grievance-stat-value">{{pending}}</span>
                <hr>  
                <span class="grievance-stat-name">Open Grievances </span>
            </div>
        </div>

        <div class="col-md-3 grievance-box">
            <div class="grievance grievance-escalated">
                <span class="grievance-stat-value">{{escalated}}</span>
                <hr>   
                <span class="grievance-stat-name">Escalated Grievances </span>
            </div>
        </div>

        <div class="col-md-3 grievance-box">
            <div class="grievance grievance-resolved">
                <span class="grievance-stat-value">{{resolved}}</span>
                 <hr>   
                <span class="grievance-stat-name">Addressed Grievances </span>
            </div>
        </div>
    </div>
    <div id="graphs">
        <div class="row row_gap">
            <div class="col-md-6 graph">
                <div class = "graph-box" id="top5_institute"></div>
            </div>



            <div class="col-md-6 ">
            <div class="coverBox">
         
                <label style="color:#5A5A5A;font-size:1em;display: inline;">Select State</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select id="stateName" required="required" style="display: inline;">
                    <option value="all">All</option>
                    <option ng-repeat= "y in states" value={{y.name}} >{{y.name}}</option>
                </select>
           
                </div>

                <div class="graph">
                <div class = "graph-boxShort" id="grievance_type"></div></div>
            </div>

        </div>

         <div class="row row_gap">
            <div class="col-md-6 graph">
                <div class = "graph-box" id="grievance_yearwise"></div>
            </div>

            <div class="col-md-6 graph">
                <div class = "graph-box" id="top5_state"></div>
            </div>

        </div>
    </div>

</div>
<script src="js/aicteCharts.js"></script>