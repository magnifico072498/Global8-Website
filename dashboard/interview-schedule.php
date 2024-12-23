<style>
    .interview-text-gold {
        color: #b38b00;
    }

    .interview-section-container {
        padding: 0 15px;
        margin-bottom: 50px;
    }

    .interview-section {
        border-radius: 5px;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        background-color: #222;
        padding: 50px 10%;
        border-radius: 12px;
    }

    .interview-header h2 {
        font-size: 2rem;
        color: #fff;
        margin-bottom: 10px;
        text-align: left;
    }

    .interview-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .interview-item {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        padding: 30px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        box-sizing: border-box;
    }

    .interview-item-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        flex-wrap: wrap;
        gap: 15px;
    }

    .interview-item-title {
        flex: 2;
        font-size: 1rem;
        font-weight: bold;
        color: #333;
        text-align: left;
    }

    .interview-item-details {
        font-size: 1rem;
        font-weight: 550;
        display: flex;
        color: #333;
        align-items: center;
        gap: 25px;
        flex: 3;
        flex-wrap: wrap;
        justify-content: right;
        text-align: center;
    }

    .interview-item-details>div {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .IS-date {
        color: green;
    }

    @media (max-width: 1200px) {
        .interview-item-content {
            gap: 10px;
        }

        .interview-item-title {
            font-size: 1.2rem;
        }

        .interview-item-details>div {
            font-size: .90rem;
        }
    }

    @media (max-width: 966px) {
        .interview-section {
            padding: 40px 5%;
        }

        .interview-item-content {
            flex-direction: column;
            align-items: center;
        }

        .interview-item {
            padding: .90rem;
        }

        .interview-item-title {
            font-size: 1rem;
        }

        /* Center the interview-item-details */
        .interview-item-details {
            justify-content: center;
        }

        .interview-item-title,
        .interview-item-details {
            text-align: center;
            width: 100%;
        }

        .interview-header h2 {
            font-size: 1.4rem;
        }
    }

    @media (max-width: 480px) {
        .interview-section-container {
            padding: 0 15px;
        }

        .interview-section {
            padding: 20px 5%;
        }

        .interview-item {
            padding: .85rem;
        }

        .interview-item-title {
            font-size: 1rem;
        }

        /* Center the interview-item-details */
        .interview-item-details {
            justify-content: center;
        }

        .interview-item-details>div {
            font-size: 12px;
        }

        .interview-header h2 {
            font-size: 1.2rem;
            margin-bottom: 0;
        }
    }
</style>

<section class="interview-section-container">
    <div class="interview-list interview-section">
        <div class="interview-header">
            <h2><span class="interview-text-gold">Interview</span> Schedule</h2>
        </div>
        <div class="interview-item">
            <div class="interview-item-content">
                <!-- Job Title Column -->
                <div class="interview-item-title">
                    <p>Jhoma Bernardo Go</p>
                </div>
                <!-- Job Details Column -->
                <div class="interview-item-details">
                    <div>
                        <i class="ri-briefcase-line"></i> Quality Assurance Specialist
                    </div>
                    <div class="IS-date">
                        <i class="ri-calendar-event-line"></i> 20-11-24
                    </div>
                </div>
            </div>
        </div>
        <div class="interview-item">
            <div class="interview-item-content">
                <!-- Job Title Column -->
                <div class="interview-item-title">
                    <p>Jhoma Bernardo Go</p>
                </div>
                <!-- Job Details Column -->
                <div class="interview-item-details">
                    <div>
                        <i class="ri-briefcase-line"></i> Quality Assurance Specialist
                    </div>
                    <div class="IS-date">
                        <i class="ri-calendar-event-line"></i> 20-11-24
                    </div>
                </div>
            </div>
        </div>
        <div class="interview-item">
            <div class="interview-item-content">
                <!-- Job Title Column -->
                <div class="interview-item-title">
                    <p>Jhoma Bernardo Go</p>
                </div>
                <!-- Job Details Column -->
                <div class="interview-item-details">
                    <div>
                        <i class="ri-briefcase-line"></i> Quality Assurance Specialist
                    </div>
                    <div class="IS-date">
                        <i class="ri-calendar-event-line"></i> 20-11-24
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


