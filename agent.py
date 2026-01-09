from fastapi import FastAPI, HTTPException
from fastapi.middleware.cors import CORSMiddleware
from pydantic import BaseModel
from enum import Enum
import random

# ==========================================
# 1. Setup & CORS
# ==========================================
app = FastAPI()

origins = [
    "http://127.0.0.1:5500",
    "http://localhost:5500",
    "http://127.0.0.1:8081", # Laravel default
    "http://localhost:8081",
    "http://127.0.0.1:8000", # Self test
]

app.add_middleware(
    CORSMiddleware,
    allow_origins=origins,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# ==========================================
# 2. Data Models
# ==========================================
class BudgetTier(str, Enum):
    budget = "budget"
    mid = "mid"
    luxury = "luxury"

class TravelRequest(BaseModel):
    team: str
    budget_tier: BudgetTier

# ==========================================
# 3. Endpoints
# ==========================================

@app.get("/")
def read_root():
    return {"message": "AFCON Agent is running"}

@app.post("/generate-plan")
def generate_plan(request: TravelRequest):
    """
    Generates a travel plan for the given team and budget.
    """
    try:
        # --- BUSINESS LOGIC START ---
        # This section simulates the agent's logic. 
        # Replace this with your actual prediction/planning logic.
        
        team_name = request.team.title()
        budget = request.budget_tier.value
        
        # Mock Prediction
        stages = ["Round of 16", "Quarter-Final", "Semi-Final", "Final"]
        prediction = random.choice(stages)
        
        # Mock Itinerary
        itinerary = []
        num_stops = random.randint(3, 5)
        cities = ["Casablanca", "Rabat", "Marrakech", "Tangier", "Agadir", "Fes"]
        
        for i in range(num_stops):
            city = cities[i % len(cities)]
            cost_base = 500 if budget == "budget" else 1500 if budget == "mid" else 5000
            
            itinerary.append({
                "city": city,
                "date": f"Matchday {i+1}",
                "match": {
                    "opponent": f"Opponent {i+1}",
                    "stage": "Group Stage" if i < 3 else prediction
                },
                "stadium": {
                    "name": f"Grand Stade de {city}"
                },
                "costs": {
                    "total": cost_base + random.randint(0, 500)
                },
                "must_visit": [
                    {
                        "name": f"{city} Medina",
                        "category": "Culture",
                        "description": "Historical center with markets."
                    }
                ],
                "city_metadata": {
                    "description": f"Welcome to {city}, a beautiful host city."
                }
            })
            
        currency = "USD"
        
        # --- BUSINESS LOGIC END ---

        return {
            "team": team_name,
            "prediction": prediction,
            "itinerary": itinerary,
            "currency": currency
        }

    except Exception as e:
        print(f"Error generating plan: {e}")
        raise HTTPException(status_code=500, detail=str(e))

if __name__ == "__main__":
    import uvicorn
    print("Starting AFCON Agent on port 8000...")
    uvicorn.run(app, host="127.0.0.1", port=8001)
