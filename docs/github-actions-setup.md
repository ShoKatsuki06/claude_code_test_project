# GitHub Actions - Slack通知設定ガイド

このドキュメントでは、プルリクエストが作成・更新された際にSlackに通知を送信するGitHub Actionsの設定方法を説明します。

## 📋 概要

プルリクエストの以下の操作で自動的にSlack通知が送信されます：
- **作成時** (`opened`)
- **更新時** (`synchronize`)
- **再オープン時** (`reopened`)

## 🔧 設定手順

### 1. GitHub Secretsにwebhook URLを登録

GitHub ActionsからSlackに通知を送信するため、Webhook URLをSecretsに安全に保存する必要があります。

#### 手順：
1. GitHubリポジトリページに移動
2. **Settings** タブをクリック
3. 左サイドバーの **Secrets and variables** → **Actions** をクリック
4. **New repository secret** ボタンをクリック
5. 以下の情報を入力：
   - **Name**: `SLACK_WEBHOOK_URL`
   - **Secret**: `https://hooks.slack.com/services/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`
6. **Add secret** をクリック

### 2. ワークフローファイルの確認

`.github/workflows/pr-slack-notification.yml` ファイルが正しく作成されていることを確認してください。

### 3. 通知内容

Slack通知には以下の情報が含まれます：

#### 📝 通知項目
- **リポジトリ名**
- **PR作成者**
- **PRタイトル**
- **PR説明**
- **ブランチ情報** (source → target)
- **PRのURL** (タイトルリンク)

#### 🎨 通知デザイン
- **新規PR**: 緑色のアクセント
- **PR更新**: オレンジ色のアクセント
- **GitHub アイコン**付きフッター
- **タイムスタンプ**表示

## 🚀 動作テスト

設定完了後、以下の方法でテストできます：

1. **新しいブランチ作成**
   ```bash
   git checkout -b test/slack-notification
   ```

2. **軽微な変更を加える**
   ```bash
   echo "# Test" >> test.md
   git add test.md
   git commit -m "Test Slack notification"
   git push origin test/slack-notification
   ```

3. **プルリクエスト作成**
   - GitHubでプルリクエストを作成
   - Slackの `#claude_code_notification` チャンネルに通知が送信されることを確認

## 🔍 トラブルシューティング

### よくある問題

#### 1. 通知が送信されない
- **確認事項**:
  - GitHub SecretsにSLACK_WEBHOOK_URLが正しく設定されているか
  - Webhook URLが有効かどうか
  - ワークフローファイルの構文エラーがないか

#### 2. 通知は送信されるがチャンネルが間違っている
- **解決方法**: 
  - ワークフローファイルの `channel` フィールドを確認
  - Slackチャンネル名が正確かチェック

#### 3. ワークフローが実行されない
- **確認事項**:
  - ワークフローファイルが `.github/workflows/` ディレクトリに配置されているか
  - YAMLファイルの構文が正しいか
  - リポジトリのActionsが有効になっているか

### デバッグ方法

1. **GitHub Actions ログの確認**
   - リポジトリの **Actions** タブでワークフローの実行状況を確認
   - エラーメッセージがある場合は詳細を確認

2. **Slack Webhook URLのテスト**
   ```bash
   curl -X POST -H 'Content-type: application/json' \
   --data '{"text":"Test message"}' \
   YOUR_WEBHOOK_URL
   ```

## 📊 期待される結果

正常に設定された場合、以下のような通知がSlackに送信されます：

```
🔔 新しいプルリクエストが作成されました

リポジトリ: ShoKatsuki06/claude_code_test_project
作成者: ShoKatsuki06
プルリクエストタイトル: 新しい機能の追加
説明: この機能により...
ブランチ: feature/new-feature → main

[プルリクエストを見る]
```

## 🔗 関連リンク

- [GitHub Actions Documentation](https://docs.github.com/en/actions)
- [Slack Webhook Documentation](https://api.slack.com/messaging/webhooks)
- [action-slack GitHub Action](https://github.com/8398a7/action-slack)

---

🤖 *このドキュメントはClaude Codeによって生成されました*