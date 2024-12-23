<style>
    /* Container styles */
    .stats-container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        width: 100%;
        max-width: 1400px;
        margin: 20px auto;
        flex-wrap: wrap;
        margin-bottom: 50px;
    }

    .stat-item {
        color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.06);
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        flex: 1;
        min-width: 250px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .stat-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }
    
    .stat-item:nth-child(1) {
        background: linear-gradient(135deg, #4f46e5, #6d5dfc);
        color: #ffffff;
    }

    .stat-item:nth-child(2) {
        background: linear-gradient(135deg, #10b981, #34d399);
        color: #ffffff;
    }

    .stat-item:nth-child(3) {
        background: linear-gradient(135deg, #f59e0b, #fbbf24);
        color: #ffffff;
    }

    .stat-item:nth-child(4) {
        background: linear-gradient(135deg, #ef4444, #f87171);
        color: #ffffff;
    }

    .stat-item i {
        font-size: 2.5rem;
        margin-bottom: 15px;
        display: inline-block;
    }

    /* Heading styles */
    .stat-item h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.2rem;
        font-weight: 600;
        margin: 10px 0;
    }

    /* Paragraph styles */
    .stat-item p {
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0;
    }


    /* Responsive styles */
    @media (max-width: 1200px) {
        .stats-container {
            justify-content: space-between;
        }

        .stat-item {
            width: 45%;
            /* Adjust to fit two items per row */
        }
    }

    @media (max-width: 768px) {
        .stat-item {
            width: 100%;
            /* Full width for single-column layout */
            margin-bottom: 0;
        }
    }

    @media (max-width: 480px) {
        .stats-container {
            padding: 0 15px;
        }

        .stat-item {
            margin-bottom: 0;
        }
    }
</style>
<section id="statistic">
    <div class="stats-container">
        <div class="stat-item">
            <i class="ri-team-fill"></i>
            <h2>Applicants</h2>
            <p>120</p>
        </div>
        <div class="stat-item">
            <i class="ri-list-check-3"></i>
            <h2>Shortlisted</h2>
            <p>45</p>
        </div>
        <div class="stat-item">
            <i class="ri-briefcase-4-fill"></i>
            <h2>Job Open</h2>
            <p>10</p>
        </div>
        <div class="stat-item">
            <i class="ri-user-unfollow-fill"></i>
            <h2>Rejected</h2>
            <p>5</p>
        </div>
    </div>
</section>

