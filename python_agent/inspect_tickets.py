
import pandas as pd
import os

try:
    # Try reading as excel
    df = pd.read_excel("Afcon-tickets-pricing.xlsx")
    print("Successfully read Excel file.")
    print(df.head().to_string())
    print(df.columns.tolist())
except Exception as e:
    print(f"Error reading Excel: {e}")
    # Fallback: maybe it's a CSV named xlsx? Unlikely but...
    try:
        df = pd.read_csv("Afcon-tickets-pricing.xlsx")
        print("Wait, it was a CSV disguised as XLSX?")
        print(df.head())
    except Exception as e2:
        print(f"Error reading as CSV too: {e2}")
