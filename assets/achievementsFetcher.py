#!/usr/bin/env python3

import os
import json
from dotenv import load_dotenv
from py342 import IntraAPI

if __name__ == '__main__':
	print("Achievements Fetcher")
	print("Loading environment")
	if not os.path.isfile(".env"):
		print("Unable to load .env file")
		os._exit(1)
	load_dotenv()
	client_id = os.getenv('UID42')
	if not client_id:
		print("Undefined:\tUID42")
		os._exit(1)
	client_secret = os.getenv('PWD42')
	if not client_secret:
		print("Undefined:\tPWD42")
		os._exit(1)
	rate_limit = int(os.getenv('RATE_LIMIT'))
	if not rate_limit:
		print("Undefined:\tRATE_LIMIT")
		os._exit(1)
	scopes = "profile public projects elearning tig forum"
	print("OAuth")
	intra = IntraAPI.intraAPI(client_id, client_secret, 46, scopes, rate_limit)
	user_id = intra.getUserId("thdelmas")
	achievements = intra.getAchievementsUsers(user_id)
	for achievement in achievements:
		info = intra.getAchievement(achievement["achievement_id"])
		achievement["name"] = info["name"]
		achievement["description"] = info["description"]
		achievement["image"] = info["image"]
		achievement["tier"] = info["tier"]
		achievement.pop("id")
		achievement.pop("achievement_id")
		achievement.pop("user_id")
		achievement.pop("login")
		achievement.pop("url")
		achievement.pop("created_at")
		achievement.pop("updated_at")
	print(json.dumps(achievements).encode("utf-8"))
	intra.closeConnection()
