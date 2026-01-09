from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
import pandas as pd
import os
import random
from datetime import datetime
from fastapi.middleware.cors import CORSMiddleware


app = FastAPI()


# ✅ CORS CONFIG (FIX)
app.add_middleware(
    CORSMiddleware,
    allow_origins=[
        "*",
    ],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# --------------------------
# 1. METADATA CONSTANTS
# --------------------------

CITY_METADATA = {
    "Rabat": {
        "image_url": "https://example.com/images/rabat-hassan-tower.jpg",
        "description": "The Royal Capital, known for its historic landmarks and administrative importance."
    },
    "Casablanca": {
        "image_url": "https://example.com/images/casablanca-hassan-ii.jpg",
        "description": "The economic hub and home to the majestic Hassan II Mosque."
    },
    "Marrakech": {
        "image_url": "https://example.com/images/marrakech-medina.jpg",
        "description": "The Red City, famous for its vibrant souks, palaces, and gardens."
    },
    "Agadir": {
        "image_url": "https://example.com/images/agadir-beach.jpg",
        "description": "A major city on the shore of the Atlantic Ocean, known for its beaches."
    },
    "Fes": {
        "image_url": "https://example.com/images/fes-medina.jpg",
        "description": "The cultural capital, home to the world's oldest university and a labyrinthine medina."
    },
    "Tanger": {
        "image_url": "https://example.com/images/tangier-city.jpg",
        "description": "The gateway between Africa and Europe, offering a unique blend of cultures."
    },
    "Tangier": { # Handle potential variation
        "image_url": "https://example.com/images/tangier-city.jpg",
        "description": "The gateway between Africa and Europe, offering a unique blend of cultures."
    },
    "TBD Location": {
        "image_url": "https://example.com/images/morocco-map.jpg",
        "description": "Location to be determined based on tournament progression."
    }
}

STADIUM_METADATA = {
    "Prince Moulay Abdellah": {
        "capacity": 53000,
        "image_url": "https://example.com/images/stadium-rabat.jpg"
    },
    "Stade Mohammed V": {
        "capacity": 67000,
        "image_url": "https://example.com/images/stadium-casablanca.jpg"
    },
    "Grand Stade de Marrakech": {
        "capacity": 45240,
        "image_url": "https://example.com/images/stadium-marrakech.jpg"
    },
    "Grand Stade d'Agadir": {
        "capacity": 45480,
        "image_url": "https://example.com/images/stadium-agadir.jpg"
    },
    "Stade de Fes": {
        "capacity": 45000,
        "image_url": "https://example.com/images/stadium-fes.jpg"
    },
    "Grand Stade de Tanger": {
        "capacity": 65000,
        "image_url": "https://example.com/images/stadium-tangier.jpg"
    },
    "Ibn Batouta Stadium": { # Alias for Tanger
        "capacity": 65000,
        "image_url": "https://example.com/images/stadium-tangier.jpg"
    },
    "TBD Stadium": {
        "capacity": 0,
        "image_url": "https://example.com/images/stadium-generic.jpg"
    },
    "Stade TBD": {
        "capacity": 0,
        "image_url": "https://example.com/images/stadium-generic.jpg"
    }
}

MUST_VISIT_PLACES = {
    "Rabat": [
        {"name": "Hassan Tower", "category": "History", "description": "Minaret of an incomplete mosque."},
        {"name": "Kasbah of the Udayas", "category": "Culture", "description": "Blue and white ancient fortress."}
    ],
    "Casablanca": [
        {"name": "Hassan II Mosque", "category": "Religion", "description": "A monumental mosque on the ocean."},
        {"name": "The Corniche", "category": "Leisure", "description": "Beachfront promenade with cafes and clubs."}
    ],
    "Marrakech": [
        {"name": "Jemaa el-Fnaa", "category": "Culture", "description": "Famous square with storytellers and musicians."},
        {"name": "Majorelle Garden", "category": "Nature", "description": "Botanical garden created by Jacques Majorelle."}
    ],
    "Agadir": [
        {"name": "Agadir Oufella", "category": "History", "description": "Ruins of the old kasbah with panoramic views."},
        {"name": "Souk El Had", "category": "Shopping", "description": "One of the largest markets in Morocco."}
    ],
    "Fes": [
        {"name": "Al Quaraouiyine", "category": "History", "description": "Oldest existing, continually operating educational institution."},
        {"name": "Chouara Tannery", "category": "Culture", "description": "Iconic tanneries operating since medieval times."}
    ],
    "Tanger": [
        {"name": "Hercules Caves", "category": "Nature", "description": "Mythical caves with a window to the sea."},
        {"name": "Cap Spartel", "category": "Landmark", "description": "Where the Atlantic meets the Mediterranean."}
    ],
    "Tangier": [
        {"name": "Hercules Caves", "category": "Nature", "description": "Mythical caves with a window to the sea."},
        {"name": "Cap Spartel", "category": "Landmark", "description": "Where the Atlantic meets the Mediterranean."}
    ],
    "TBD Location": []
}

# --------------------------
# 2. DATA LOADING
# --------------------------

BASE_DIR = os.path.dirname(os.path.abspath(__file__))

# Load the data once when the server starts
try:
    # Load Fixtures
    fixtures_path = os.path.join(BASE_DIR, "CAN2025_FULL_FIXTURES.csv")
    fixtures_df = pd.read_csv(fixtures_path, sep=";")
    
    # Process Teams
    # Assumes format "Team A vs Team B"
    fixtures_df[['team_1', 'team_2']] = fixtures_df['Match'].str.split(' vs ', expand=True)
    
    # Normalize City column
    fixtures_df['city_norm'] = fixtures_df['City'].str.strip().str.title()
    
    # Load Hotels
    hotels_path = os.path.join(BASE_DIR, "file1.csv")
    hotels_df = pd.read_csv(hotels_path, sep=";")
    hotels_df['city_norm'] = hotels_df['city'].str.strip().str.title()
    
    # Calculate daily rates by tier per city
    # Budget: <= 3 stars
    budget_daily = hotels_df[hotels_df['stars'] <= 3].groupby('city_norm')['price_usd_per_night'].mean().rename('daily_budget_usd')
    
    # Mid: 4 stars
    mid_daily = hotels_df[hotels_df['stars'] == 4].groupby('city_norm')['price_usd_per_night'].mean().rename('daily_mid_usd')
    
    # Luxury: 5 stars
    luxury_daily = hotels_df[hotels_df['stars'] >= 5].groupby('city_norm')['price_usd_per_night'].mean().rename('daily_luxury_usd')
    
    # Combine hotel stats
    city_costs = pd.concat([budget_daily, mid_daily, luxury_daily], axis=1)
    
    # Fill missing values with global averages if specific city data is missing for a tier
    global_avgs = {
        'daily_budget_usd': hotels_df[hotels_df['stars'] <= 3]['price_usd_per_night'].mean(),
        'daily_mid_usd': hotels_df[hotels_df['stars'] == 4]['price_usd_per_night'].mean(),
        'daily_luxury_usd': hotels_df[hotels_df['stars'] >= 5]['price_usd_per_night'].mean()
    }
    city_costs = city_costs.fillna(value=global_avgs)
    
    # Merge matches with city costs
    master_df = fixtures_df.merge(city_costs, on='city_norm', how='left')
    
    # Fill cities with no hotel data with global averages
    master_df = master_df.fillna(value=global_avgs)
    
    # Rename columns to match what the endpoint expects
    master_df.rename(columns={
        'Date': 'date',
        'Match': 'match',
        'Stadium': 'stadium',
        'City': 'city'
    }, inplace=True)
    
    # print("Data loaded successfully.") 
    
except Exception as e:
    # print(f"Error loading CSV: {e}")
    master_df = pd.DataFrame() # Empty fallback

# Load Rankings
try:
    rankings_path = os.path.join(BASE_DIR, "afcon_2025_fifa_rankings.csv")
    rankings_df = pd.read_csv(rankings_path)
    TEAM_RANKINGS = dict(zip(rankings_df['Team'].str.strip().str.title(), rankings_df['FIFA_Ranking_2025']))
    # print("FIFA Rankings loaded successfully.")
except Exception as e:
    # print(f"Error loading Rankings: {e}")
    TEAM_RANKINGS = {}

# Load Historical Data and Calculate Scores
TEAM_HISTORY_SCORES = {}
try:
    history_path = os.path.join(BASE_DIR, "afcon_last_10_editions_team_status.csv")
    history_df = pd.read_csv(history_path, sep=";")
    
    # Points mapping
    POINTS = {
        "Champions": 10,
        "Runners-up": 7,
        "Third Place": 5,
        "Fourth Place": 5,
        "Semi-Finals": 5, # Catch-all if needed
        "Quarter-finals": 3,
        "R16": 1,
        "Group Stage": 0,
        "DNP": 0
    }
    
    for index, row in history_df.iterrows():
        team = row['Team'].strip().title()
        score = 0
        # Columns 2008 to 2023 are indexes 1 to end
        for col in history_df.columns[1:]:
            result = str(row[col]).strip()
            score += POINTS.get(result, 0)
        TEAM_HISTORY_SCORES[team] = score
        
    # print("Historical Data loaded successfully.")
except Exception as e:
    # print(f"Error loading Historical Data: {e}")
    pass


# --------------------------
# 3. PREDICTION LOGIC
# --------------------------

def simulate_prediction(team_name):
    """
    Simulates a tournament result based on FIFA rankings (40%) and History (60%).
    Returns: (predicted_stage, confidence_rating)
    """
    team_name = team_name.title()
    
    # 1. Ranking Score (Lower rank is better, so invert it)
    # Assume max rank considered is 150.
    rank = TEAM_RANKINGS.get(team_name, 100)
    # Normalized Ranking Score (0 to 100, where 100 is best)
    ranking_score = max(0, 150 - rank) / 1.5 
    
    # 2. History Score
    # Max possible score ≈ 10 * 9 editions = 90. Normalize to 0-100 logic roughly.
    raw_history = TEAM_HISTORY_SCORES.get(team_name, 0)
    # Cap at 100 for normalization safety
    history_score = min(100, raw_history * 1.5) 
    
    # 3. Weighted Power Score
    # History is weighted higher as per user request (or implication of "consideration")
    # Let's do 50/50 split for balance
    power_score = (ranking_score * 0.5) + (history_score * 0.5)
    
    # Determine Tier based on Power Score
    # High score = Better Tier
    if power_score >= 60:
        # Tier 1: Strong contenders
        stages = ["Round of 16", "Quarter-Finals", "Semi-Finals", "Final", "Winner"]
        weights = [0.05, 0.15, 0.3, 0.3, 0.2] # Boosted winner chance
    elif power_score >= 30:
        # Tier 2: Competent teams
        stages = ["Group Stage", "Round of 16", "Quarter-Finals", "Semi-Finals"]
        weights = [0.1, 0.4, 0.4, 0.1]
    else:
        # Tier 3: Underdogs
        stages = ["Group Stage", "Round of 16", "Quarter-Finals"]
        weights = [0.7, 0.25, 0.05]
        
    # Use a seeded random generator for deterministic results per team
    rng = random.Random(team_name)
    predicted_stage = rng.choices(stages, weights=weights, k=1)[0]
    
    # Determine Confidence
    if power_score >= 70:
        confidence = "High"
    elif power_score >= 40:
        confidence = "Medium"
    else:
        confidence = "Low"
        
    return predicted_stage, confidence

class PlanRequest(BaseModel):
    team: str
    budget_tier: str  # 'budget_daily', 'mid_daily', or 'luxury_daily'

@app.post("/generate-plan")
async def generate_plan(request: PlanRequest):
    team = request.team.title()
    budget_key = request.budget_tier.lower() # 'budget_daily', 'mid_daily', ...
    tier_col = f"daily_{budget_key}_usd"
    
    # 1. Filter matches where the user's team is playing
    team_matches = master_df[(master_df['team_1'] == team) | (master_df['team_2'] == team)]
    
    if team_matches.empty:
        raise HTTPException(status_code=404, detail="Team not found in schedule.")

    itinerary = []
    
    # Cost Categories
    total_breakdown = {
        "accommodation": 0,
        "food": 0,
        "transport": 0,
        "tickets": 0,
        "total": 0
    }
    
    # Hueristic Costs per Tier
    # Keys must match the PlanRequest budget_tier values
    TIER_ESTIMATES = {
        "budget": {"food": 20, "transport": 10},
        "mid": {"food": 50, "transport": 30},
        "luxury": {"food": 150, "transport": 100}
    }
    # Handle "budget_daily" -> "budget"
    tier_simple = budget_key.split('_')[0] 
    estimates = TIER_ESTIMATES.get(tier_simple, TIER_ESTIMATES['budget'])
    
    TICKET_COST = 50 # Flat rate for MVP

    # 2. Logic: Predict journey and calculate costs
    prediction, confidence = simulate_prediction(team)
    
    step_counter = 1
    
    # Dates for duration calc
    all_dates = []

    # Calculate Group Stage Matches
    for index, row in team_matches.iterrows():
        days_per_match = 3 
        
        # 1. Accommodation
        daily_rate_hotels = row.get(tier_col, global_avgs.get(tier_col, 100))
        stay_cost = days_per_match * daily_rate_hotels
        
        # 2. Food & Transport
        food_cost = days_per_match * estimates['food']
        transport_cost = days_per_match * estimates['transport']
        
        # 3. Tickets
        ticket_cost = TICKET_COST
        
        # Aggregation
        total_breakdown['accommodation'] += stay_cost
        total_breakdown['food'] += food_cost
        total_breakdown['transport'] += transport_cost
        total_breakdown['tickets'] += ticket_cost
        
        total_leg_cost = stay_cost + food_cost + transport_cost + ticket_cost
        
        match_city = row['city'].strip()
        match_stadium = row['stadium'].strip()
        
        # Fix for "Tanger" if needed
        display_city = "Tangier" if match_city == "Tanger" else match_city
        
        opponent = row['team_2'] if row['team_1'] == team else row['team_1']
        
        match_date = row['date']
        all_dates.append(match_date)

        itinerary.append({
            "step_order": step_counter,
            "date": match_date,
            "city": display_city,
            "city_metadata": CITY_METADATA.get(display_city, CITY_METADATA.get(match_city, {})),
            "match": {
                "opponent": opponent,
                "stage": "Group Stage",
                "time": row['Time'] if 'Time' in row else "20:00 GMT+1",
                "is_predicted": False
            },
            "stadium": {
                "name": match_stadium,
                "capacity": STADIUM_METADATA.get(match_stadium, {}).get("capacity", "N/A"),
                "image_url": STADIUM_METADATA.get(match_stadium, {}).get("image_url", "")
            },
            "costs": {
                "accommodation": stay_cost,
                "transport": transport_cost,
                "food": food_cost,
                "tickets": ticket_cost,
                "total": total_leg_cost
            },
            "must_visit": MUST_VISIT_PLACES.get(display_city, MUST_VISIT_PLACES.get(match_city, []))
        })
        step_counter += 1

    # 3. Simulate Knockout Stages if predicted
    STAGES_ORDER = ["Group Stage", "Round of 16", "Quarter-Finals", "Semi-Finals", "Final", "Winner"]
    
    try:
        current_stage_index = STAGES_ORDER.index("Group Stage")
        predicted_index = STAGES_ORDER.index(prediction) if prediction in STAGES_ORDER else 0
        target_index = predicted_index if prediction != "Winner" else STAGES_ORDER.index("Final") # Map Winner to Final for iteration
        
        if target_index > current_stage_index:
            avg_daily_rate = global_avgs.get(tier_col, 100)
            
            STAGE_DATES = {
                "Round of 16": "03/01/2026",
                "Quarter-Finals": "09/01/2026",
                "Semi-Finals": "14/01/2026",
                "Final": "18/01/2026"
            }
            
            for i in range(current_stage_index + 1, target_index + 1):
                stage_name = STAGES_ORDER[i]
                if stage_name == "Winner": continue
                    
                days_per_match = 3
                
                # Costs
                stay_cost = days_per_match * avg_daily_rate
                food_cost = days_per_match * estimates['food']
                transport_cost = days_per_match * estimates['transport']
                ticket_cost = TICKET_COST * 2 if stage_name in ["Semi-Finals", "Final"] else TICKET_COST
                
                # Aggregation
                total_breakdown['accommodation'] += stay_cost
                total_breakdown['food'] += food_cost
                total_breakdown['transport'] += transport_cost
                total_breakdown['tickets'] += ticket_cost
                
                total_leg_cost = stay_cost + food_cost + transport_cost + ticket_cost
                
                city = "Rabat" if stage_name == "Final" else "TBD Location"
                stadium = "Prince Moulay Abdellah" if stage_name == "Final" else "TBD Stadium"
                
                match_date = STAGE_DATES.get(stage_name, "TBD")
                all_dates.append(match_date)
                
                itinerary.append({
                    "step_order": step_counter,
                    "date": match_date,
                    "city": city,
                    "city_metadata": CITY_METADATA.get(city, {}),
                    "match": {
                        "opponent": "TBD (Opponent)",
                        "stage": stage_name,
                        "time": "TBD GMT+1",
                        "is_predicted": True
                    },
                    "stadium": {
                        "name": stadium,
                        "capacity": STADIUM_METADATA.get(stadium, {}).get("capacity", "N/A"),
                        "image_url": STADIUM_METADATA.get(stadium, {}).get("image_url", "")
                    },
                    "costs": {
                        "accommodation": stay_cost,
                        "transport": transport_cost,
                        "food": food_cost,
                        "tickets": ticket_cost,
                        "total": total_leg_cost
                    },
                    "must_visit": MUST_VISIT_PLACES.get(city, [])
                })
                step_counter += 1
                
    except ValueError:
        pass

    # Sum total
    total_breakdown['total'] = sum(total_breakdown.values())

    # Calculate Duration
    try:
        sorted_dates = sorted([d for d in all_dates if d != "TBD"], key=lambda x: datetime.strptime(x, "%d/%m/%Y"))
        if sorted_dates:
            start_date = datetime.strptime(sorted_dates[0], "%d/%m/%Y")
            end_date = datetime.strptime(sorted_dates[-1], "%d/%m/%Y")
            duration_days = (end_date - start_date).days + 1
            duration_str = f"{duration_days} days"
        else:
            duration_str = "Unknown"
    except Exception:
        duration_str = "Unknown"

    return {
        "team": team,
        "prediction": prediction,
        "currency": "USD",
        "summary": {
            "total_duration": duration_str,
            "total_budget": round(total_breakdown['total'], 2),
            "confidence_score": confidence
        },
        "itinerary": itinerary
    }

if __name__ == "__main__":
    import argparse
    import json
    import asyncio
    import sys

    parser = argparse.ArgumentParser(description='AFCON Journey Planner Agent')
    parser.add_argument('--team', type=str, help='Team name')
    parser.add_argument('--budget', type=str, help='Budget tier (budget, mid, luxury)')
    
    args, unknown = parser.parse_known_args()

    # Debug prints to stderr (so they don't pollute stdout JSON)
    # print(f"Debug: Arguments received: {args}", file=sys.stderr)

    if args.team and args.budget:
        # CLI Mode
        try:
            # Create a mock request object compatible with the function
            req = PlanRequest(team=args.team, budget_tier=args.budget)
            
            # Run the async function
            result = asyncio.run(generate_plan(req))
            
            # Output JSON to stdout
            print(json.dumps(result))
        except Exception as e:
            # Print error as JSON for easier parsing of failures
            print(json.dumps({"error": str(e)}))
            sys.exit(1)
    else:
        # API Server Mode
        import uvicorn
        uvicorn.run(app, host="127.0.0.1", port=8001)